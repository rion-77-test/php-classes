<?php
$msg = "";
if (isset($_GET["submit"])) {
    $num = $_GET["num"];

    $sum = 1;
    for ($i = 1; $i <= $num; $i++) {
        $sum *= $i;
        if ($i == $num) {
            $msg .= $i;
        } else {
            $msg .= $i . "x";
        }
    }

    $msg .= "= " . $sum; 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <form>
        <label>Type a number</label><br>
        <input type="number" name="num" id="num"><br><br>
        <button type="submit" name="submit">Submit</button>
        <p><?= $msg ?></p>
    </form>
</body>

</html>