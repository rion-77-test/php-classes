<?php
$arr = ['a', 'b', 'c'];
$str = "str";

echo is_array($str)? "Array" : "Not Array";
echo "<br>";
echo is_array($arr)? "Array" : "Not Array";
echo "<br>";

echo in_array("a", $arr)? "Found" : "Not Found";
echo "<br>";
echo in_array("d", $arr)? "Found" : "Not Found";
