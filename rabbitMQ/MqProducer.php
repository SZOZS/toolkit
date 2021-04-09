<?php

namespace app\api\model;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use app\api\model\IpPool;
use app\api\model\Tool;

class MqProducer
{
    /**
     * 生产端
     **/
    public static function pushMessage($array)
    {
        $ipPool = new IpPool();
        $ipPoolInfo = $ipPool->getIpInfo();
        if (isset($array['pType'])) {
            $amqpDetail = config('rabbitmq.' . $array['pType']);
            unset($array['pType']);
        } else {
            $amqpDetail = config('rabbitmq.emailQueueProducer');
        }
        $connection = new AMQPStreamConnection($ipPoolInfo['host'], $ipPoolInfo['port'], $ipPoolInfo['login'], $ipPoolInfo['password'], $ipPoolInfo['vhost']);
        $channel = $connection->channel();
        $toolM = new Tool();
        foreach ($array as $data) {
            /*
                 name: $queue  创建队列
                 passive: false
                 持久durable: true // //队列将在服务器重启后继续存在
                 互斥exclusive: false // 队列可以通过其他渠道访问
                 auto_delete: false 通道关闭后，队列不会被删除
             */
            if (isset($data['queue'])) {
                $queueName = $amqpDetail['queueName'] . '_' . $data['queue'];
            } else {
                $queueName = $amqpDetail['queueName'];
            }

            $channel->queue_declare($queueName, false, true, false, false);
            /*
                 name: $exchange  创建交换机
                 type: direct   直连方式
                 passive: false
                 durable: true  持久// 交换器将在服务器重启后继续存在
                 auto_delete: false //一旦通道关闭，交换器将不会被删除。
             */
            $channel->exchange_declare($amqpDetail['exchangeName'], 'direct', false, true, false);
            $channel->queue_bind($queueName, $amqpDetail['exchangeName'], $queueName);
            /*
                 $messageBody:消息体
                 content_type:消息的类型 可以不指定
                 delivery_mode:消息持久化最关键的参数
                 AMQPMessage::DELIVERY_MODE_NON_PERSISTENT = 1;
                 AMQPMessage::DELIVERY_MODE_PERSISTENT = 2;
             */
            $messageBody = $data['message'];
            $message = new AMQPMessage($messageBody, ['content_type' => 'text/plain', 'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]);
            $channel->basic_publish($message, $amqpDetail['exchangeName'], $queueName);
            $toolM->insertMQLogProducer([
                'platformId' => $data['platformId'],
                'uId' => $data['uId'],
                'exchangeName' => $amqpDetail['exchangeName'],
                'exchangeType' => $amqpDetail['exchangeType'],
                'queueName' => $queueName,
                'routeKey' => $amqpDetail['routeKey'],
                'consumerTag' => $amqpDetail['consumerTag'],
                'dataJson' => $messageBody
            ]);
        }
        // $channel->basic_publish($message, '', 'hello');
        $channel->close();
        $connection->close();
    }
}
