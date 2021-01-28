<?php

namespace app\api\model;

use think\Model;
use app\api\model\Tool;
use app\api\model\Platform;

class OpenApi extends Model
{
    protected $table = 'tf_open_api_certification_field';
    protected $pk = 'id';

    //第三方登录，获得令牌
    public function login(int $platformId)
    {
        $platformInfo = Platform::find($platformId);
        if (!empty($platformInfo)) {
            if ($platformInfo['access_token'] && date('Y-m-d H:i:s') < $platformInfo['token_deadline']) {
                return $platformInfo['access_token'];
            } else {
                $url = $platformInfo['login_url'];
                $mothodType = $platformInfo['login_method'];
                $fieldArr = self::where(['platform_id' => $platformId, 'is_del' => 0])->select();
                if (!empty($fieldArr)) {
                    $external_data = $header = [];
                    foreach ($fieldArr as $field) {
                        if ($field['type'] == 'header') $header[$field['field']] = $field['default_value'];
                        if ($field['type'] == 'params') $external_data[$field['field']] = $field['default_value'];
                    }
                }
                $resultJson = curls($url, $external_data, $mothodType, $header);
                $toolM = new Tool(['platformId' => $platformId]);
                $toolM->insertLog([
                    ['type' => 'method', 'sql_str' => strtoupper($mothodType)],
                    ['type' => 'url', 'sql_str' => $url],
                    ['type' => 'header', 'sql_str' => json_encode($header)],
                    ['type' => 'params', 'sql_str' => json_encode($external_data)],
                    ['type' => 'result', 'sql_str' => $resultJson],
                ]);
                $resultArray = json_decode($resultJson, true);
                if (isset($resultArray['access_token'])) {
                    Platform::where([
                        'platform_id' => $platformId,
                    ])->update([
                        'access_token' => $resultArray['access_token'],
                        'token_deadline' => date('Y-m-d H:i:s', time() + $resultArray['expires_in'])
                    ]);
                    return $resultArray['access_token'];
                }
            }
        }
        return false;
    }
}
