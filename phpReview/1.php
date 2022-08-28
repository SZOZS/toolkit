<?php
/*
PHP语法

PHP 脚本在服务器上执行，然后将纯HTML结果发送回浏览器。


基本的PHP语法

PHP脚本可以放在文档中的任何位置。
PHP脚本以 <?php 开始，以 ?> 结束：
<?php
//PHP 代码
?>
PHP文件的默认文件扩展名是“.php”。
PHP文件通常包含HTML标签和一些PHP脚本代码。
下面，我们提供了一个简单的PHP文件实例，它可以向浏览器输出文本“Hello World！”：
?>
<!DOCTYPE html>
<html>

<body>
    <h1>My first PHP page</h1>
    <?php
    echo "Hello World!";
    ?>
</body>

</html>
<?php
PHP中的每个代码行都必须以分好结束。分号是一种分隔符，用于把指令集区分开来。
通过PHP，有俩种在浏览器输出文本的基本指令：echo和print。


PHP中的注释

实例
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    //这是PHP单行注释
    /*
这是
PHP 多行
注释
*/
/*
?>
</body>

</html>
<?php
PHP 变量
变量是用于存储信息的“容器”：
实例
$x = 5;
$y = 6;
$z = $x + $y;
echo $z;
运行结果：
11


与代数类似

x=5
y=6
z=x+y
在代数中，我们使用字母（如x），并给它赋值（如5）。
从上面的表达式z=x+y,我们可以计算出z的值为11。
在PHP中，这些字母被称为变量。
变量是用于存储数据的容器。

PHP变量
与代数类似，可以给PHP变量赋予某个值（x=5）或者表达式（z=x+y）。
变量可以是很短的名称（如x和y）或者更具描述性的名称（如age、carname、totalvolume）。
PHP变量规则：
    变量以$符号开始，后面跟着变量的名称
    变量名必须以字母或者下划线字符开始
    变量名只能包含字母数字字符以及下划线（A-z、0-9和_）
    变量名不能包含空格
    变量名是区分大小写的（$y和$Y是两个不同的变量）
PHP语句和PHP变量都是区分大小写的。

创建（声明）PHP变量
变量在您第一次赋值给它的时候被创建：
示例：
$txt = "Hello world!";
$x = 5;
$y = 10.5;
运行结果：
Hello world!
在上面的语句执行中，变量txt将保存值Hello world！，且变量x将保存值5。
注释：当您赋一个文本值给变量时，请在文本值两侧加上引号。

PHP是一门弱类型语言
在上面的实例中，我们注意到，不必向PHP声明该变量的数据类型。
PHP会根据变量的值，自动把变量转换为正确的数据类型。
在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。

PHP变量作用域
变量的作用域是脚本中变量可被引用/使用的部分。
PHP有四种不同的变量作用域：
local
global
static
parameter

局部和全局作用域
在所有函数外部定义的变量，拥有全局作用域。除了函数外，全局变量可以被脚本中的任何部分访问，要在一个函数中访问一个全局变量，需要使用global关键字。
在PHP函数内部声明的变量是局部变量，仅能在函数内部访问：
实例：
$x = 5; //全局变量
function myTest()
{
    $y = 10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数对外变量:<p>";
echo "变量 x 为 : $x";
echo "<br>";
echo "变量 y 为 : $y";

运行结果：
测试函数内变量：
变量 x 为：
变量 y 为：10
测试函数外变量：
变量 x 为：5
变量 y 为：

在以上实例中myTest()函数定义了$x和$y变量。$x变量在函数外声明，所以它是全局变量，$y变量在函数内声明所以它是局部变量。
当我们调用myTest()函数并输出两个变量的值，函数将会输出局部变量$y的值，但是不能输出$x的值，因为$x变量在函数外定义，无法在函数内使用，如果要在一个函数中访问一个全局变量，需要使用global关键字。
然后我们在myTest()函数外输出两个变量的值，函数将会输出全局变量$x的值，但是不能输出$y的值，因为$y变量在函数中定义，属于局部变量。
你可以在不同函数中使用相同的变量名称，因为这些函数内定义的变量名是局部变量，只作用于该函数内。

PHP global 关键字
global关键字用于函数内访问全局变量。
在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上global关键字：
实例：
$x = 5;
$y = 10;

function myTest1()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;

运行结果：
15
PHP将所有全局变量存储在一个名为$GLOBALS[index]的数组中。index保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
上面的示例可以写成这样：
示例：
$x = 5;
$y = 10;
function myTest2()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest2();
echo $y;

运行结果：
15

Static作用域。

当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
要做到这一点，请在您第一次声明变量时使用static关键字：
示例：
function myTest3()
{
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();

运行结果：
012

然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。
注释：该变量仍然是函数的局部变量。
实例：
// function myTest4()
// {
//     echo $x;
// }

// myTest(5);
我们将在PHP函数章节对它做更详细的讨论。

PHP5 echo 和 print 语句
在PHP中有两个基本的输出方式：echo 和 print。
本章节中我们会详细讨论两个语句的用法，并在实例中演示如何使用 echo 和 print 。

PHP echo 和 print 语句
echo和print区别：
echo-可以输出一个或多个字符串
print-只允许输出一个字符串，返回值总为1
提示：echo输出的速度比print快，echo没有返回值，print有返回值1.

PHP echo 语句
echo是一个语言结构，使用的时候可以不用加括号，也可以加上括号：echo 或 echo().
显示字符串
下面的实例演示了如何使用echo命令输出字符串（字符串可以包含HTML标签）：
实例：
echo "<h2>PHP很有趣!</h2>";
echo "Hello world!<br>";
echo "我要学 PHP!";
echo "这是一个", "字符串", "使用了", "多个", "参数。";
运行结果：
PHP 很有趣!
Hello world!
我要学 PHP!这是一个字符串使用了很多参数。
显示变量
下面的实例演示了如何使用echo命令输出变量和字符串：
// $txt1 = "学习 PHP";
// $txt2 = "RUNOOB.COM";
// $cards = array("Volvo", "BMW", "Toyota");
// echo $txt1;
// echo "<br>";
// echo "在 $txt2 学习 PHP ";
// echo "<br>";
// echo "我车的品牌是 {$cards[0]} ";
PHP print语句
print 同样是一个语言结构，可以使用括号，也可以不使用括号：print或print()。
显示字符串
下面的实例演示了如何使用print命令输出字符串（字符串可以包含HTML标签）：
实例：
print "<h2>PHP 很有趣!</h2>";
print "Hello world!<br>";
print "我要学习 PHP!";

显示变量
下面的实例演示了如何使用print命令输出变量和字符串：
实例：
$txt1="学习 PHP";
$txt2="RUNOOB.com";
$cars=['Volvo','BMW','Toyota'];
print $txt1;
print "<br>";
print "在 $txt2 学习 PHP";
print "<br>";
print "我车的品牌是 {$cars[0]}";
运行结果：
学习 PHP
在RUNOOB.COM 学习 PHP
我车的品牌是Volvo

PHP 5 数据类型
String(字符串),Integer(整型),Float(浮点型),Boolean(布尔型),Array(数组),Object(对象),NULL(空值)。

PHP 字符串
一个字符串是一串字符的序列，就像“Hello world！”。
你可以将任何文本放在单引号和双引号中；
实例：

$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;

PHP整型
整数是一个没有小数的数字。
整数规则：
整数必须至少包含一个数字（0-9）
整数不能包含逗号或空格
整数是没有小数点的
整数可以是正数或负数
整型可以用三种格式来指定：十进制，十六进制（以0x为前缀）或八进制（前缀为0）。
在一下实例中我们呢将测试不同的数字。PHP var_dump() 函数返回变量的数据类型和值：
实例：
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; //负数
var_dump($x);
echo "<br>";
$x = 0x8C; //十六进制数
var_dump($x);
echo "<br>";
$x = 047; //八进制数
var_dump($x);

PHP 浮点数
浮点数是带小数部分的数字，或是指数形式。
在以下实例中我们呢将测试不同的数字。PHP var_dump()函数返回变量的数据类型和值：
实例：

$x = 10.365;
var_dump($x);
$x = 2.4e3;
var_dump($x);
$x = 8E-5;
var_dump($x);

PHP 布尔值
布尔值可以是TRUE或FALSE。
$x=true;
$y=false;
布尔型通常用于条件判断。在接下来的章节中你会学到更多关于条件控制的教程。

PHP 数组
数组可以在一个变量中存储多个值。
在以下实例中创建了一个数组，然后使用PHP var_dump()函数返回数组的数据类型和值；
实例：
$cards = array("Volvo", "BMW", "Toyota");
var_dump($cards);

PHP对象
对象数据类型也可以用于存储数据。
在PHP中，对象必须声明。
首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。
然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：
实例：
class Car
{
    var $color;
    function Car($color = "green")
    {
        $this->color = $color;
    }
    function what_color()
    {
        return $this->color;
    }
}
以上实例中PHP关键字this就是指向当前对象的实例的指针，不指向任何其他对象或类。
你将会在接下来的章节中学会更多关于对象的知识。

PHP NULL值
NULL值标识变量没有值。NULL是数据类型为NULL的值。
NULL值指明一个变量是否为空值。同样可用于数据空值和NULL值的区别。
可以通过设置变量值为NULL来清空变量数据：
实例：
$x = "Hello world!";
$x = null;
var_dump($x);

PHP 5 常量
常量值被定义后，在脚本的其他任何地方都不能被改变。

PHP常量
常量是一个简单值的标识符。该值在脚本中不能改变。
一个常量由英文字母、下划线、和数字组成，但数字不能作为首字母出现。（常量名并不需要$ 修饰符）。
注意：常量在整个脚本中都可以使用。

设置PHP常量
设置常量，使用define()函数，函数语法如下：
    bool define(string $name,mixed $value [,bool $case_insensitive = false])
该函数有三个参数：
    name:必选参数，常量名称，及标志符。
    value:必选参数，常量的值。
    case_insensitive:可选参数，如果设置为TRUE，该常量则大小写不敏感。默写是大小写敏感的。
以下实例我们创建一个区分大小写的常量，常量值为“欢迎访问Runoob.com”：
实例：
    区分大小写的常量名:define("GREETING","欢迎访问Runoob.com");
    echo GREETING;//输出“欢迎访问Runoob.com”
    echo '<br>';
    echo greeting;//输出 "greeting"
以下实例我们创建一个 不区分大小写的常量，常量值为“欢迎访问 Runoob.com”:
实例：
    不区分大小写的常量名define("GREETING","欢迎访问 Runoob.com",true)；
    echo greeting;//输出 “欢迎访问 Runoob.com”

常量是全局的
常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
以下实例演示了在函数内使用常量，即使常量定义在函数外也可以正常使用常量。
实例
define("GREETING", "欢迎访问 Runoob.com");
function myTest()
{
    echo GREETING;
}
myTest();//输出 “欢迎访问 Runoob.com”
*/

// $x = 10;
// $y = 6;
// echo ($x + $y);
// echo '<br>';
// echo ($x - $y);
// echo '<br>';
// echo ($x * $y);
// echo '<br>';
// echo ($x / $y);
// echo '<br>';
// echo ($x % $y);
// echo '<br>';
// echo -$x;
// echo '<br>';

