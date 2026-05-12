<?php 
$arr = [
   "Bangladesh" => "Dhaka",
   "India" => "Delhi",
   "Japan" => "Tokyo",
   "Nepal" => "Kathmundu",
   "America" => "Washington"
];
echo "<pre>";
print_r($arr);
echo "</pre>";
ksort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>