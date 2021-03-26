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
