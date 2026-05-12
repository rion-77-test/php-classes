<?php 
// $file = fopen("student.csv", "a+");
// fputcsv($file,["sl","name", "age"]);
// fputcsv($file,["1","Raju", "70"]);
// fputcsv($file,["2","Mina", "71"]);
// fclose($file);

$file = fopen("student.csv", "a+");
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// print_r(fgetcsv($file));
// var_dump(fgetcsv($file));
// var_dump(fgetcsv($file));
// var_dump(fgetcsv($file));

while($row = fgetcsv($file)) {
    echo "ID: {$row[0]}<br>";
    echo "Name: {$row[1]}<br>";
    echo "Batch: {$row[2]}<br>";
    echo "<hr>";
}
?>