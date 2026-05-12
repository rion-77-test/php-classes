<?php $n = (int) readline("How many numbers: ");
$positive = 0;
$negative = 0;
$zero = 0;
$sum = 0;
for ($i = 0; $i < $n; $i++) {
   $num = (int) readline("Enter number: ");
   if ($num > 0) {
      $positive++;
   } elseif ($num < 0) {
      $negative++;
   } else {
      $zero++;
   }
   $sum += $num;
}
echo "Positive numbers: " . $positive . "\n";
echo "Negative numbers: " . $negative . "\n";
echo "Zero: " . $zero . "\n";
echo "Sum: " . $sum . "\n";
