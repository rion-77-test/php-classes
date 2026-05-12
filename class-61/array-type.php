<?php
/* 
  1. numeric/indexed array
  2. associative array
  3. multidimentional array

*/

 $arr_num = ['a', 'b', false, 456];

 echo "<pre>";
 print_r($arr_num);
 var_dump($arr_num);
 echo "</pre>";
 
 $arr_assoc = [
    "name" => "John Doe",
    "age" => 30,
    "email" => [
        "e1" => "j@j1.com",
        "e2" => "j@j2.com",
    ]
 ];

echo "<pre>";
var_dump($arr_assoc);
echo "<br>";
echo $arr_assoc['name']. "<br>";
$arr_assoc["name"] = "Shahed Ahmed Rion";
echo $arr_assoc['name']. "<br>";
echo $arr_assoc['email']['e2'];
echo "</pre>";


$arr_multi = [
    ['a','b','c'],
    ['d','e','f'],
    ['g','h','i']
];

echo "<pre>";
var_dump($arr_multi);
echo "</pre>";


?>