<?php 
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo $name;
    if(strpos($name, "@") === false) {
        $msg = '<p style="color:red;">Username must contain @ sumbol</p>';
    } elseif(strlen($name) < 4 || strlen($name) > 8) {
        $msg = '<p style="color:red;">Username must be between 4 to 8 digit</p>';
    } else {
        $msg = '<p style="color:green;">Username is valid</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Username Validation</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a username</label><br>
        <input type="text" name="name" id=""><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?= $msg ?? "" ?>
</body>
</html>