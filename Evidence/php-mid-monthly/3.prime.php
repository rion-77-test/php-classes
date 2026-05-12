<?php 
$msg = "";
if(isset($_POST["submit"])) {
    $num = $_POST["num"];

    $msg = "$num is Prime";

    for($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $msg = "$num is not Prime";
            break;
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <form method="post">
        <label>Enter a number to check prime</label><br>
        <input type="number" name="num" id=""><br><br>
        <button type="submit" name="submit">Submit</button>
        <h4><?= $msg ?></h4>
    </form>
</body>
</html>