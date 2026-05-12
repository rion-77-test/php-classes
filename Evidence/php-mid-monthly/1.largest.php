<?php 
$msg = "";
if(isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    if($num1 > $num2 && $num1 > $num3) {
        $msg = "$num1 is the largest";
    } elseif ($num2 > $num3) {
        $msg = "$num2 is the largest";
    } else {
        $msg = "$num3 is the largest";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest</title>
</head>
<body>
    <form method="post">
        <label>Enter three numbers</label><br>
        <input type="number" name="num1" id=""><br><br>
        <input type="number" name="num2" id=""><br><br>
        <input type="number" name="num3" id=""><br><br>
        <button type="submit" name="submit">Submit</button>
        <h4><?= $msg ?></h4>
    </form>
</body>
</html>