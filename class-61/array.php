<?php 
$arr1 = ['a',123,true,[1,2,3]];
$arr2 =  array('d','e','f','g');

echo "<pre>";
print_r($arr1);
print_r($arr2);
echo count($arr1);
echo "<br>";
echo count($arr2);
echo "</pre>";

echo "<br>";
echo $arr2[2];

echo "<br>";
echo $arr1[3][2];

// if(4%2)
?>