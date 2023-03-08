
<?php
//Напишите свой аналог функции strlen
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);
$coun1 = count($arr1);
print_r($coun1);

?>
