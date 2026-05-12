<?php
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    if(empty($username)) {
        $msg = "Username is empty";
    } elseif(strlen($username) < 4 && strlen($username) > 8) {
        $msg = "Username must be between 4 to 8 character";
    } elseif (strpos($username, "@") === false ) {
        $msg = "Username must conatain @ sumbol";
    } else {
        $msg = "Logged in succsessfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.Username</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <!-- <label for="">Password</label><br>
        <input type="password"><br> -->
        <button type="submit" name="login">Login</button>
    </form>
    <p><?= $msg ?? "" ?></p>
</body>
</html>