<?php 
require_once "class/user.php";

$raju = new User ("Raju", 25);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Details</h1>
    <h3><?php echo $raju->checkAge() ?></h3>
</body>
</html>