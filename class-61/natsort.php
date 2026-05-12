<?php 
$arr = ['picture1.jpg', 'image20.jpg', 'picture10.jpg', 'Picture2.jpg'];




echo "<pre>";
print_r($arr);
echo "</pre>";

// Regular sort
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// natsort
natsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// natcasesort
natcasesort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";


