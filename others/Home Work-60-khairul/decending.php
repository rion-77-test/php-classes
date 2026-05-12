<?php $a = (int) readline("Enter first number: ");
$b = (int) readline("Enter second number: ");
$c = (int) readline("Enter third number: ");
$numbers = [$a, $b, $c];
rsort($numbers);
echo "Numbers in Descending Order:\n";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "\n";
}
