<?php

namespace app\api\model;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use app\api\model\IpPool;
use app\api\model\Tool;
use app\api\model\Model1;
use app\api\model\Model2;

class MqConsumer
{
    protected $ipPoolInfo;
    protected $exchangeName;
    protected $exchangeType;
    protected $queueName;

    public function __construct()
    {
        $ipPool = new IpPool();
        $this->ipPoolInfo = $ipPool->getIpInfo();
    }

    /**
     * 消费端 消费端需要保持运行状态实现方式
     * 1 linux上写定时任务每隔5分钟运行下该脚本，保证访问服务器的ip比较平缓，不至于崩溃
     * 2 nohup php index.php index/Message_Consume/start &  用nohup命令后台运行该脚本
     * 3
     **/
    function shutdown($channel, $connection)
    {
        $channel->close();
        $connection->close();
    }

    function process_message($message)
    {
        if (config('rabbitmq.debug'))
            echo date('Y-m-d H:i:s') . ' | ' . $this->exchangeName . ' |' . $this->exchangeType . ' |' . $this->queueName . ' |' . $message->delivery_info['routing_key'] . "\n";
        //消费数据入库
        $toolM = new Tool();
        $toolM->insertMQLog([
            'exchangeName' => $this->exchangeName,
            'exchangeType' => $this->exchangeType,
            'queueName' => $this->queueName,
            'routeKey' => $message->delivery_info['routing_key'],
            'consumerTag' => $message->delivery_info['consumer_tag'],
            'dataJson' => $message->body
        ]);
        switch ($this->queueName) {
            case 'one';
                curls("http://127.0.0.1:9505/", ['data' => $message->body], 'post', [], true); #swoole的HTTP服务器的用法
                break;
            case 'two'; //更新设备心跳
                $model1 = new Model1();
                $model1->function1(json_decode($message->body, true), $message->delivery_info['routing_key']); #需要根据路由键再分流
                break;
            case 'device_test'; //测试设备
                $model2 = new Model2();
                $model2->function2(json_decode($message->body, true));
                break;
        }
        $redis = redis();
        $redis->hset('mq_logs_' . $this->queueName, date('Y-m-d H:i:s'), $message->body);
        //手动发送ack
        $message->delivery_info['channel']->basic_ack($message->delivery_info['delivery_tag']);
        // Send a message with the string "quit" to cancel the consumer.
        if ($message->body === 'quit')
            $message->delivery_info['channel']->basic_cancel($message->delivery_info['consumer_tag']);
    }

    /**
     * 启动
     * @return \think\Response
     */
    public function start(array $array)
    {
        if (isset($array['exchangeName'])) $this->exchangeName = $array['exchangeName'];
        if (isset($array['exchangeType'])) $this->exchangeType = $array['exchangeType'];
        if (isset($array['queueName'])) $this->queueName = $array['queueName'];

        $connection = new AMQPStreamConnection(
            $this->ipPoolInfo['host'],
            $this->ipPoolInfo['port'],
            $this->ipPoolInfo['login'],
            $this->ipPoolInfo['password'],
            $this->ipPoolInfo['vhost']
        );
        $channel = $connection->channel();
        $channel->queue_declare($this->queueName, true, true, false, false);
        $channel->exchange_declare($this->exchangeName, $this->exchangeType, true, true, false);
        $channel->queue_bind($this->queueName, $this->exchangeName, $array['routeKey']);
        $channel->basic_qos(0, 20, true); #设置允许的最大未提交ack的数量
        /*
            queue: 从哪里获取消息的队列
            consumer_tag: 消费者标识符
            no_local: 不接收此使用者发布的消息
            no_ack: 如果求设置为true，则此使用者将使用自动确认模式。详情请参见。注：自动确认模式没办法限流，会在遇到超过阈值的情况下阻塞，重试俩次情况没有好转的情况下，消费者就会断开连接。
            exclusive:请独占使用者访问，这意味着只有这个使用者可以访问队列
            nowait:
            callback: :PHP回调 array($this, 'process_message') 调用本对象的process_message方法
        */
        $channel->basic_consume($this->queueName, $array['consumerTag'], false, false, false, false, array($this, 'process_message'));
        register_shutdown_function(array($this, 'shutdown'), $channel, $connection);
        while (count($channel->callbacks)) {
            $channel->wait();
        }
    }
}
