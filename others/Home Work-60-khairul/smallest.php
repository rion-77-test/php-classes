<?php $numbers = [4, 4, -4, -1, 0, -8, 0, 45, 9, 79];
$smallest = $numbers[0];
$largest = $numbers[0];
$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
   $num = $numbers[$i];
   if ($num < $smallest) {
      $smallest = $num;
   }
   if ($num > $largest) {
      $largest = $num;
   }
}
echo "Smallest number: " . $smallest . "\n";
echo "Largest number: " . $largest . "\n";
echo "Sum of array: " . $sum . "\n";
//  
