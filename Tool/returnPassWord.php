<?php
echo <<<eof

$argv[0]脚本名称；
$argv[1]第一个参数；随机字符串多少个一分割
$argv[2]第二个参数；取几个拼接


eof;

function returnPassWord($argv)
{
    if (!isset($argv[1])) $argv[1] = 3;
    if (!isset($argv[2])) $argv[2] = 3;
    $str = 'abcdefghijklmnopqrstuvwxyz~!@#$%^&*()_+ABCDEFGHIJKLMNOPQRSTUVWXYZ[];,./{}:<>?`1234567890-=';
    $str = str_shuffle($str); #函数随机地打乱字符串中的所有字符。
    $arr = str_split($str, $argv[1]); #函数把字符串分割到数组中。
    $randKey = array_rand($arr, $argv[2]); #函数返回数组中的一个随机键名，或者如果指定函数返回键名不只一个，则返回一个包含随机键名的数组。
    $password = '';
    foreach ($randKey as $rk) {
        $password .= $arr[$rk];
    }
    return $password;
}
echo returnPassWord($argv);
