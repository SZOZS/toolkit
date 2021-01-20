<?php

namespace app\api\model;

use think\Model;

//1、读取配置文件；
//2、立刻删除废弃的配置资源；
//3、可用资源小于0时生成新的一批资源；
//4、调用对象的getIpInfo方法拿到一条资源；
class IpPool extends Model
{
    protected $table = 'tf_ip_pool';
    protected $schema = [
        'id' => 'int',
        'token' => 'text',
        'host' => 'varchar',
        'port' => 'int',
        'login' => 'varchar',
        'password' => 'varchar',
        'vhost' => 'varchar',
        'proportion' => 'int',
        'total' => 'int',
        'type' => 'varchar'
    ];

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $config = config('rabbitmq.AMQP'); #读配置文件
        $this->deleteSetInfo($config); #删除最新的配置中弃用的链接
        if (self::count() < 1) //没有预生成的链接配置
            $this->createSetInfo($config); #生成新批次的
    }

    protected function deleteSetInfo(array $config) #删除最新的配置中弃用的链接
    {
        foreach ($config as $c) {
            $token[] = $this->returnToken($c);
        }
        self::whereNotIn('token', $token)->delete();
    }

    protected function returnToken(array $array)
    {
        return sha1(md5($array['host'] . '_' . $array['port'] . '_' . $array['login'] . '_' . $array['password']));
    }

    protected function createSetInfo($config)
    {
        $GCD = $this->returnGCD(array_column($config, 'proportion')); #最新的最小公倍数
        $total = 0;
        foreach ($config as $c) {
            $proportion = $this->dataToInt($c['proportion']) / $GCD;
            $total += $proportion;
            $dataI = [
                'token' => $this->returnToken($c),
                'host' => $c['host'],
                'port' => $c['port'],
                'login' => $c['login'],
                'password' => $c['password'],
                'vhost' => $c['vhost'],
                'proportion' => $proportion,
                'total' => 0,
                'type' => 'rabbitMQ',
            ];
            for ($i = 0; $i < $proportion; $i++) {
                $dataIArr[] = $dataI;
            }
        }
        foreach ($dataIArr as &$d) {
            $d['total'] = $total;
        }
        self::insertAll($dataIArr);
    }

    protected function dataToInt($data) #小于1的数都改为1,字符串判断大小自动转整数;
    {
        return $data < 1 ? 1 : (int) $data;
    }

    protected function returnGCD(array $array) #求一组数的最小公倍数
    {
        $total = count($array);
        $GCD = $array[0];
        for ($i = 1; $i < $total; $i++) {
            $array[$i] = $this->dataToInt($array[$i]);
            $GCD = $this->greatestCommonDivisor($GCD, $array[$i]);
        }
        return $GCD;
    }

    protected function greatestCommonDivisor($a, $b)
    {
        $c = $b;  //定义一个新值来作为余数承载变量
        while ($c > 0) {
            $c = ($a % $b); //取两个数的余数
            if ($c == 0) { //如果余数为0 则较小的为最大公因数
                return $b; //返回结果
            }
            $a = $b; //把b赋给a
            $b = $c; //b取余数接着进行循环
        }
    }

    public function getIpInfo() #返回链接配置信息 12312
    {
        $dataArr = self::select()->toArray();
        $key = array_rand($dataArr);
        self::destroy($dataArr[$key]['id']);
        return $dataArr[$key];
    }
}
