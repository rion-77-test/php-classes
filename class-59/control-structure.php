<?php
/* 
 1. conditional
   a. if
   b. if-else
   c. if-elseif-else
   d. switch

 2. Loop
   a. while
   b. do-while
   c. for
   d. foreach  

*/

// if, if-else, if-elseif-else

$x = 10;

if ($x > 5) {
    echo "x is greater than 5";
} else {
    echo "y is less than 5";
}
echo "<hr>";

$y = 5;
if ($y > 0) {
    echo "Y is positive number";
} elseif ($y < 0) {
    echo "Y is negative number";
} else {
    echo "Y is zero";
}

echo "<hr>";
// Switch

$day = "Sunday";

switch ($day) {
    case "Sunday":
        echo "First day of the week";
        break;

    case "Saturday":
        echo "Weekend";
        break;

    case "Firday":
        echo "Weekend";
        break;

    default:
        echo "Weekend";
        break;
}

echo "<hr>";

// For Loop
for($i = 0; $i < 10; $i++) {
    if($i == 5) break;
    echo $i."<br>";
}

echo "<hr>";

// While Loop
$z = 5;
while ($z > 0) {
   echo $z . "<br>";
   $z--;
} 

echo '<br>';

// Do while

do {
    echo 'Do while z = ' . $z . '<br>';
    $z++;
} while ($z < 0);
echo '<hr>';

//foreach

$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $index => $value) {
    echo $index . " :- " . $value ."<br>";
}
?>