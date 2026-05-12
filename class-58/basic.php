<?php 
/* echo "<span>PHP Top </span>", " ", "PHP Top2 <br>";
echo ("New line" ."<br>");

print("Print line 1" . "<br>");
print "Print line". "<br>";

$arr = ['PHP','HTML','CSS', 5465];
const PI = 3.14;

echo PI;
echo "<br>";

// Way to print array
echo "<h2>Array Print</h2>";
echo "----------Print_r---------<br>";
print_r($arr);
echo "<br>----------var_dump---------<br>";
var_dump($arr); */

$name = "Mina";
$age = 25;

echo "<h4>--printf--</h4>";
// printf displayes the text with variable like types
printf("Her name is %s and age is %d", "Mina", 25);
echo '<br>';

printf("Her name is %s and age is %d", $name, $age);
echo '<br>';

printf("%d bottles of water cost $%f.", 100 , 43.20);
echo '<br>';

echo "<h4>--sprintf--</h4>";
// Same as printf . instead of displaing the value it returns the value. so it's need to be stored
$str = sprintf("Her name is %s and age is %d", $name, $age);
echo $str;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>HTML Section</h2>
    <h3><?php //echo "PHP inside HTML"?></h3>
    <h3><?= "new PHP inside html";?></h3>
</body>
</html>

<?php 
echo "PHP end";
?>
<? echo '<br>' ?>

<!-- Not recommended -->
<? echo "PHP bottom2"; ?>
<? echo '<br>' ?>
<? echo "PHP bottom2"; ?>