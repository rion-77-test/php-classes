<?php
/* // Open file in read and write mode
$file = fopen("files/text.txt", "r+");

// Writing something in the file
fwrite($file, "Hello world ");
fwrite($file, "Hello BD ");
fwrite($file, "Biday pithibi ");
fclose($file);

// Reopening the file for to get expected output
$file = fopen("files/text.txt", "r+");
echo fgets($file);
// echo "<br>";
// echo fgets($file);
fclose($file); */

// Open file in write only mode "a"  also known as apped
$file = fopen("files/text.txt", "a");

// Writing something in the file
fwrite($file, "Hello world ");
// fwrite($file, "Hello BD ");
fclose($file);

// Reopening the file for to get expected output
$file = fopen("files/text.txt", "r+");
echo fgets($file);
// echo "<br>";
// echo fgets($file);
fclose($file);


?>