<?php

function add(int $a, int $b): array {
    $sum = $a + $b . "<br>";
    return [$a, $b];
}

function test(): void {
    echo "Hello";
}
echo "<pre>";
print_r(add(1, 5));
echo "<br>";
var_dump(add(5, "2"));
echo "</pre>";
?>