<?php
// echo substr("12:00:00", 0, 5);

// var_dump(timeFriendlyEcho(59));
// var_dump(timeFriendlyEcho(3599));
// var_dump(timeFriendlyEcho(86399));
// var_dump(timeFriendlyEcho(604799));
// var_dump(timeFriendlyEcho(2591999));
// var_dump(timeFriendlyEcho(31103999));
// var_dump(timeFriendlyEcho(311039990));


// function timeFriendlyEcho(string $second)
// {
//     $timestring = '';
//     $time[1] = 60; #分
//     $time[2] = 3600; #时
//     $time[3] = 86400; #天
//     $time[4] = 7 * $time[3]; #周
//     $time[5] = 30 * $time[3]; #月
//     $time[6] = 365 * $time[3]; #年
//     $txt = [1 => '分', 2 => '时', 3 => '天', 4 => '周', 5 => '月', 6 => '年'];
//     for ($i = 6; $i > 0; $i--) {
//         if ($time[$i] <= $second) {
//             $remainder = $second % ($time[$i]);
//             $timestring .= ((($second - $remainder) / ($time[$i])) . $txt[$i]);
//             $second = $remainder;
//         }
//     }
//     if ($second < $time[1]) {
//         $timestring .= ($second . '秒');
//     }
//     return $timestring;
// }

// $array = [1, 2, 3, 4];
// foreach ($array as $k => $v) {
//     if ($v == 3) {
//         echo 33;
//         unset($v);
//         echo 34;
//     }
// }
// var_dump($array);

// $array2 = [1, 2, 3, 4];
// foreach ($array2 as $k => $v) {
//     if ($v == 3) {
//         echo 33;
//         unset($array2[$k]);
//         echo 34;
//     }
// }
// var_dump($array2);

// echo date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-01'))));

// $rule = 'nullable|min:-1|default:-1|';
// $rule = 'nullable|min:-1|default:-1';
// preg_match('/default:.*[^\|]|$/', $rule, $defaultStr);
// var_dump($defaultStr);
// $rule = '/^[0-9A-Za-z]{6,16}$/';
// $str = 151246;
// var_dump(preg_match($rule, $str));

// $array = [
//     // msgId:
//     'requestTimestamp' => '2021-10-12 14:24:00',
//     // srcReserve:
//     'mid' => '898330189995000',
//     'tid' => '10341601'
//     // instMid:
//     // merOrderId:
//     // targetOrderId:
// ];
// var_dump(json_encode($array));

// function demo($a)
// {
//     if ($a > 1) {
//         $r = $a * demo($a - 1);
//     } else {
//         $r = $a;
//     }
//     return $r;
// }


// function test($arr, $rate, $times)
// {
//     $total = 0;
//     foreach ($arr as $k => $a) {
//         $total += $a * (1 + $rate / 6) * (($times - $k) / 2);
//         var_dump($total);
//     }
// }

// test([100], 0.031, 12);

// echo 1 + 0.031 / 6;
// echo "|";
// echo (1 + 0.031 / 6) ^ 2;


$table = "<thead><tr><th>序号</th>";
for ($i = 1; $i < 17; $i++) {
    $table .= "<th>";
    $table .= isset($array[0][$i]) ? $array[0][$i] : '';
    $table .= "/<th>";
}
$table .= "</tr></thead><tbody>";
