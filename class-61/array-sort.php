<?php 
$arr = ['Cat', 'Zoo', 'Dog', 'Apple', 'Ball', "Gun"];
$arr_num = [101, 2, 50, 1010];


echo "<pre>";
print_r($arr);
echo "</pre>";

// Array sorting ascending order
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// Array sorting descesnding order
rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";


// Array sorting ascending order
sort($arr_num);
echo "<pre>";
print_r($arr_num);
echo "</pre>";

// Array sorting ascending order
rsort($arr_num);
echo "<pre>";
print_r($arr_num);
echo "</pre>";


$arr_assoc = [
    "USA" => "Washington",
    "Bangladesh" => "Dhaka",
    "Nepal" => "Kathmundu",
    "Pakistan" => "Islamabad",
    "UK" => "London",
];

// soting of values of associative array
asort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

// reverse soting of values of associative array
arsort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

// soting of values of associative array
ksort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

// reverse soting of values of associative array
krsort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

?>