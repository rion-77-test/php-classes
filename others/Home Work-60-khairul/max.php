<?php $a = (int) readline("Enter first number: ");
$b = (int) readline("Enter second number: ");
$c = (int) readline("Enter third number: ");
$max = $a;
if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}
echo "Maximum number is: " . $max;
