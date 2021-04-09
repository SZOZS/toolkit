<?php
echo '====================empty、isset、is_null====================' . '<br>';
echo '====================[]====================' . '<br>';
$arr = [];
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================\'\'====================' . '<br>';
$arr = '';
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================""====================' . '<br>';
$arr = "";
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================0====================' . '<br>';
$arr = 0;
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================\'0\'====================' . '<br>';
$arr = '0';
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '===================="0"====================' . '<br>';
$arr = "0";
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================null====================' . '<br>';
$arr = null;
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================0.0====================' . '<br>';
$arr = 0.0;
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================\'0.0\'====================' . '<br>';
$arr = '0.0';
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '===================="0.0"====================' . '<br>';
$arr = "0.0";
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================false====================' . '<br>';
$arr = false;
var_dump(empty($arr));
var_dump(isset($arr));
var_dump(is_null($arr));

echo '====================数组中不存在的下标1数组存在====================' . '<br>';
$arr = [];
var_dump(empty($arr['a']));
var_dump(isset($arr['a']));
var_dump(is_null($arr['a']));

echo '====================数组中不存在的下标2数组本身都不存====================' . '<br>';
var_dump(empty($array['a']));
var_dump(isset($array['a']));
var_dump(is_null($array['a']));