<?php 
session_start();
// $_SESSION['user_id'] = 1;
// unset($_SESSION['user_id']);
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
} 


$pass = "123";
$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

if(isset($_POST['login'])) {
    if(password_verify($_POST['password'], $hashedPass)) {
        $_SESSION['user_id'] = 1;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Passowrd</label><br>
        <input type="text" name="password" id="password"><br>
        <button name="login">Login</button>
        <p style="color:red;"><?= $error ?? "" ?></p>
    </form>
</body>
</html>