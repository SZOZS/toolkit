<?php

namespace app\api\model;

use think\Model;
use think\facade\Db;
use app\api\model\Platform;

//常用方法放这里；
//初期业务日志记录，待业务正常化后，这部分的日志单独成表记录；
class Tool extends Model
{
    protected $table = 'tf_api_sql';
    protected $pk = 'id';
    protected $platformId;
    protected $platformInfo;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (isset($data['platformId'])) {
            $this->platformId = $data['platformId'];
            $this->platformInfo = Platform::find($this->platformId);
        }
    }

    //插入日志
    public function insertLog(array $params)
    {
        if ($this->platformId > 0) {
            foreach ($params as &$val) {
                $val['platform_id'] = $this->platformId;
                $val['type'] = $this->platformInfo->platform_name . '_' . ucfirst($val['type']);
            }
            self::insertAll($params);
        }
    }

    public function insertMQLog(array $array, $table = 'log_mq_rabbit_consumer')
    {
        $data = json_decode($array['dataJson'], true);
        Db::name($table)->insert([
            'platform_id' => isset($data['platform_id']) ? $data['platform_id'] : 0,
            'exchange_name' => $array['exchangeName'],
            'exchange_type' => $array['exchangeType'],
            'queue_name' => $array['queueName'],
            'route_key' => $array['routeKey'],
            'consumer_tag' => $array['consumerTag'],
            'json' => $array['dataJson'],
        ]);
    }

    public function insertMQLogProducer(array $array, $table = 'log_mq_rabbit_producer')
    {
        Db::name($table)->insert([
            'platform_id' => isset($array['platformId']) ? $array['platformId'] : 0,
            'uid' => isset($array['uId']) ? $array['uId'] : 0,
            'exchange_name' => $array['exchangeName'],
            'exchange_type' => $array['exchangeType'],
            'queue_name' => $array['queueName'],
            'route_key' => $array['routeKey'],
            'consumer_tag' => $array['consumerTag'],
            'json' => $array['dataJson'],
        ]);
    }

    /**
     *校验字符串
     */
    public static function checkString(string $string)
    {
        return isset($string) ? (!empty($string) ? true : false) : false;
    }

    /**
     * 下划线转驼峰
     * 思路:
     * step1.原字符串转小写,原字符串中的分隔符用空格替换,在字符串开头加上分隔符
     * step2.将字符串中每个单词的首字母转换为大写,再去空格,去字符串首部附加的分隔符.
     */
    public static function camelize($uncamelized_words, $separator = '_')
    {
        $uncamelized_words = $separator . str_replace($separator, " ", strtolower($uncamelized_words));
        return ltrim(str_replace(" ", "", ucwords($uncamelized_words)), $separator);
    }

    /**
     * 驼峰命名转下划线命名
     * 思路:
     * 小写和大写紧挨一起的地方,加上分隔符,然后全部转小写
     */
    public static function uncamelize($camelCaps, $separator = '_')
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', "$1" . $separator . "$2", $camelCaps));
    }

    //curl
    //curl_setopt()
    //  CURLOPT_URL             需要获取的URL地址，也可以在curl_init()函数中设置。
    //  CURLOPT_SSL_VERIFYPEER  禁用后cURL将终止从服务端进行验证
    //  CURLOPT_SSL_VERIFYHOST  1、检查服务器SSL证书中是否存在一个公用名(common name)。2、检查公用名是否存在，并且是否与提供的主机名匹配。
    //  CURLOPT_RETURNTRANSFER  将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
    //  CURLOPT_HTTPHEADER      一个用来设置HTTP头字段的数组。使用如下的形式的数组进行设置： array('Content-type: text/plain', 'Content-length: 100')
    //  CURLOPT_POST            启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样。
    //  CURLOPT_POSTFIELDS      全部数据使用HTTP协议中的"POST"操作来发送。
    //  CURLOPT_CUSTOMREQUEST   使用一个自定义的请求信息来代替"GET"或"HEAD"作为HTTP请求。
    public static function curlGet($url)
    {
        $header = [
            "Content-type:application/json;",
            "Accept:application/json"
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $outPut = curl_exec($ch);
        curl_close($ch);
        $outPut = json_decode($outPut, true);
        return $outPut;
    }

    public static function curlPost($url, $data)
    {
        $data  = json_encode($data);
        $header = [
            "Content-type:application/json;charset='utf-8'",
            "Accept:application/json"
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $outPut = curl_exec($curl);
        curl_close($curl);
        return json_decode($outPut, true);
    }
}
