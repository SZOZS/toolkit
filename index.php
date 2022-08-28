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


// $table = "<thead><tr><th>序号</th>";
// for ($i = 1; $i < 17; $i++) {
//     $table .= "<th>";
//     $table .= isset($array[0][$i]) ? $array[0][$i] : '';
//     $table .= "/<th>";
// }
// $table .= "</tr></thead><tbody>";

// $txt1 = "学习 PHP";
// $txt2 = "RUNOOB.COM";
// $cards = array("Volvo", "BMW", "Toyota");
// echo $txt1;
// echo "<br>";
// echo "在 $txt2 学习 PHP ";
// echo "<br>";
// echo "我车的品牌是 {$cards[0]} ";

// print "<h2>PHP 很有趣!</h2>";
// print "Hello world!<br>";
// print "我要学习 PHP!";

// $txt1="学习 PHP";
// $txt2="RUNOOB.com";
// $cars=['Volvo','BMW','Toyota'];
// print $txt1;
// print "<br>";
// print "在 $txt2 学习 PHP";
// print "<br>";
// print "我车的品牌是 {$cars[0]}";

// $x = "Hello world!";
// echo $x;
// echo "<br>";
// $x = 'Hello world!';
// echo $x;

// $x = 5985;
// var_dump($x);
// $x = -345; //负数
// var_dump($x);
// $x = 0x8C; //十六进制数
// var_dump($x);
// $x = 047; //八进制数
// var_dump($x);

// $x = 10.365;
// var_dump($x);
// $x = 2.4e3;
// var_dump($x);
// $x = 8E-5;
// var_dump($x);

// $cards = array("Volvo", "BMW", "Toyota");
// var_dump($cards);

// $x = "Hello world!";
// $x = null;
// var_dump($x);

// define("GREETING", "欢迎访问 Runoob.com");
// function myTest()
// {
//     echo GREETING;
// }
// myTest();//输出 “欢迎访问 Runoob.com”

// PHP 字符串变量
// 字符串变量用于存储并处理文本。

// PHP中的字符串变量
// 字符串变量用于包含有字符的值。
// 在创建字符串之后，我们就可以对它进行操作了。您可以直接在函数中使用字符串，或者把它存储在变量中。
// 在下面的实例中。我们创建一个名为txt的字符串变量，并赋值为“Hello world！”。然后我们输出txt变量的值：
// 实例：
// $txt = "Hello world!";
// echo $txt;
// 注释：当您赋一个文本值给变量时，请记得给文本值加上单引号或者双引号。
// 现在，让我们来看看一些常用的操作字符串的函数和运算符。

// PHP 并置运算符
// 在PHP中，只有一个字符串运算符。
// 并置运算符(.)用于把两个字符串值连接起来。
// 下面的实例演示了如何将两个字符串变量连接在一起：
// 实例：
// $txt1 = "Hello world!";
// $txt2 = "What a nice day!";
// echo $txt1 . " " . $txt2;
// 上面的代码将输出：Hello world！What a nice day!
// 提示：在上面的代码中，我们已使用了两次并置运算符。这是由于我们需要在两个字符串之间插入了一个空格。

// PHP strlen()函数
// 有时知道字符串的长度是很有用的。
// strlen()函数返回字符串的长度(字符数)。
// 下面的实例返回字符串“Hello world！”的长度：
// 实例：
// echo strlen("Hello world!");
// 上面的代码将输出：12
// 提示：strlen()常常用在循环和其他函数中，因为那时确定字符串何时结束是很重要的。（例如，在循环中，我们需要在字符串中的最后一个字符之后结束循环。）

// PHP strpos()函数
// strpos()函数用于在字符串内查找一个字符或一段指定的文本。
// 如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回FALSE。
// 下面的实例在字符串“Hello world！”中查找文本“world”；
// 实例：
// echo strpos("Hello world!","world");
// 提示：在上面的实例中，字符串“world”的位置是6。之所以是6而不是7的原因是，字符串中第一个字符的位置是0，而不是1。

// 完整的PHP String参数手册
// 如需查看所有字符串函数的完整手册，请访问我们的PHP String参考手册。
// 该参考手册提供了每个函数的简要描述和应用实例！

// PHP 运算符
// 本章节我们将讨论PHP中不同运算符的应用。
// 在PHP中，赋值运算符=用于给变量赋值。
// 在PHP中，算术运算符+用于把值加在一起。

// PHP 算数运算符
// x+y 加 x和y的和     2+2     4
// x-y 减 x和y的差     5-2     3
// x*y 乘 x和y的积     5*2     10
// x/y 除 x和y的商     15/5    3
// x%y 模 x除以y的余数 5%2     1
//                     10%8    2
//                     10%2    0
// -x 取反 x取反       -2      2
// a.b 并置 连接两个字符串 "Hi"."Ha" HiHa
// 以下实例演示了使用不同算术运算符得到的不同结果：
// 实例
// $x = 10;
// $y = 6;
// echo ($x + $y);
// echo ($x - $y);
// echo ($x * $y);
// echo ($x / $y);
// echo ($x % $y);
// echo -$x;
