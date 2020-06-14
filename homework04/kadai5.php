<?php
$input = '<p>apple<br>orange<br>banana</p>';
echo strip_tags($input);
echo "\n";

$arr = array("apple","orange");
array_push($arr,"banana");
print_r($arr);
echo "\n";

$arr1 = array("apple", "orange");
$arr2 = array("banana", "mango");
$result = array_merge($arr1, $arr2);
print_r($result);
echo "\n";

date_default_timezone_set('UTC');
$timestamp = mktime(0, 0, 0, 6, 15, 2020);
echo date('c',$timestamp);
 ?>
