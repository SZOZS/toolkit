<?php
// 算数运算符
// list($x, $y) = [10, 6];
// echo "<br/>" . ($x + $y);
// echo "<br/>" . ($x - $y);
// echo "<br/>" . ($x * $y);
// echo "<br/>" . ($x / $y);
// echo "<br/>" . ($x % $y);
// echo "<br/>" . (-$x);
// var_dump(intdiv(10, 3));

// 赋值运算符
// list($x, $y, $z, $i, $j, $k, $a, $c) = [10, 20, 50, 5, 10, 15, "Hello", "Hello"];
// echo "<br/>" . ($x = 10);
// echo "<br/>" . ($y += 100);
// echo "<br/>" . ($z -= 25);
// echo "<br/>" . ($i *= 6);
// echo "<br/>" . ($j /= 5);
// echo "<br/>" . ($k %= 4);
// $b = $a . "World!";
// echo "<br/>" . $b;
// $c .= "World!";
// echo "<br/>" . $c;

// 递增/递减运算符
// list($x, $y, $z) = [10, 10, 5, 5];
// echo "<br/>" . ++$x;
// echo "<br/>" . $y++;
// echo "<br/>" . --$z;
// echo "<br/>" . $i--;

// 比较运算符
// list($x, $y) = [100, "100"];
// var_dump($x == $y);
// var_dump($x === $y);
// var_dump($x != $y);
// var_dump($x !== $y);
// list($a, $b) = [50, 90];
// var_dump($a > $b);
// var_dump($a < $b);

// array_merge(array_unique([$info->shopId] + explode(',', $info->shopIdStr)));
// $a = [1];
// $b = [2, 1, 3];
// var_dump($a + $b);
// var_dump(array_merge(array_unique($a + $b)));

// $str = 7;
// var_dump(explode(',', $str));

// https: //img.molianfit.com/20210929/more900_900lucky20210929889837.jpg
// https: //mini.molianfit.com/images/users/qr_58.png
// $pregRule = "/^((https|http):\/\/(img|mini|develop|test)(.molianfit.com)\/)[^\s]+(.bmp|.jpg|.jpeg|.png|.gif|.pdf|.avi|.wmv|.mpg|.mpeg|.mov|.rm|.ram|.swf|.flv|.mp4)$/";
// var_dump(preg_match($pregRule, "https://img.molianfit.com/20210929/more900_900lucky20210929889837.jpg"));
// var_dump(preg_match($pregRule, "https://mini.molianfit.com/images/users/qr_58.png"));

// 一个码农
// $str = "4217LCLYFQND0B19W62VIR8OA4217SV";
// var_dump($str);
// $orders = substr($str, 4,22);
// var_dump($orders);

var_dump(array_intersect_key([
    1 => 'a',
    2 => 'b',
    3 => 'c',
], [
    1 => 0,
    2 => 0,
    3 => 0,
]));
