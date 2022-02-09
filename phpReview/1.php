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
*/
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
/*
PHP中的每个代码行都必须以分好结束。分号是一种分隔符，用于把指令集区分开来。
通过PHP，有俩种在浏览器输出文本的基本指令：echo和print。


PHP中的注释

实例
*/
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
?>
</body>
</html>
<?php
/*
PHP 变量
变量是用于存储信息的“容器”：
实例
*/
$x=5;
$y=6;
$z=$x+$y;
echo $z;
/*
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
*/
$txt="Hello world!";
$x=5;
$y=10.5;
/*
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
*/
$x=5; //全局变量
function myTest(){
    $y=10; // 局部变量
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

/*
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
 */