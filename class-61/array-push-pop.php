<?php 
$arr = ["Mina", "Raju", "Mithu"];

echo "<pre>";
print_r($arr);
echo "</pre>";

//Array push
array_push($arr, "Dhipu", "Rita");

echo "<pre>";
print_r($arr);
echo "</pre>";


//Array pop
array_pop($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

//Array shift
array_shift($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

//Array unshift
array_unshift($arr, "Faysal", "Masum");

echo "<pre>";
print_r($arr);
echo "</pre>";

?>