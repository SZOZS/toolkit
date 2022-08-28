<?php



// $str = 0000000000;
// $str = 1659509538;
// $str = 9999999999;
var_dump(preg_match('/^\d{4}(\-|\/|.)\d{1,2}\1\d{1,2}$/', $str));
var_dump(date("Y-m-d H:i:s", $str));
