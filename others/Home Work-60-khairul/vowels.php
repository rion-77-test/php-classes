<?php $string = readline("Enter a string: ");
$string = strtolower($string);
$vowels = ['a', 'e', 'i', 'o', 'u'];
$vowelCount = 0;
$consonantCount = 0;
$occurrence = [];
for ($i = 0; $i < strlen($string); $i++) {
     $ch = $string[$i];
     if (ctype_alpha($ch)) {
          if (in_array($ch, $vowels)) {
               $vowelCount++;
          } else {
               $consonantCount++;
          }
          if (isset($occurrence[$ch])) {
               $occurrence[$ch]++;
          } else {
               $occurrence[$ch] = 1;
          }
     }
}
echo "Vowels: " . $vowelCount . "\n";
echo "Consonants: " . $consonantCount . "\n";
echo "\nCharacter Occurrence:\n";
foreach ($occurrence as $char => $count) {
     echo $char . " = " . $count . "\n";
}
// 
