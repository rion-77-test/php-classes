<?php
$str = "Hello World! Hello Bangladesh";

# Sub String
echo substr($str, 6 , -1) ."<br>";

# Stirng Length counter funtion
echo strlen($str)."<br>";

# Find position of a specific character in a stirng
echo strpos($str, "W")."<br>";

var_dump(strpos($str, "A"));
echo "<br>";

var_dump(stripos($str, "h"));
echo "<br>";

# Replace a letter or word in a string
echo str_replace("Hello", "Hi", $str);
// echo str_ireplace("Hello", "Hi", $str);
echo "<br>";

# Sting to uppercase
echo strtoupper($str);
echo "<br>";

# Sting to lowercase
echo strtolower($str);
echo "<br>";

# HTML Code to plain text
// $html = htmlspecialchars("<h1 style='font-size: 2000 px'>Hello 😔😔</h1>");
$html = htmlentities("<h1 style='font-size: 2000 px'>Hello 😪😪</h1>");
echo $html;



?>