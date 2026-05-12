<?php 
$str = "Hello world 2026";

// Splits a string to array
$arr = explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

// Join an array to string
$newstr = implode(" 🥵 " , $arr);

echo "<pre>";
print_r($newstr);
echo "</pre>";

// $arr2 = range("Z", "A", 3);
$arr2 = range(1, 100, 3);

echo "<pre>";
print_r($arr2);
echo "</pre>";

$arr_assoc = [
    "a" => "Apple",
    "b" => "Ball",
];

echo array_key_exists("b", $arr_assoc) ? "Found" : "Not found";


// Creates a array of keys from an associative array
$keys = array_keys($arr_assoc);
echo "<pre>";
print_r($keys);
echo "</pre>";

?>