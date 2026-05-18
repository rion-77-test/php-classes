<?php 
if(isset($_POST['sign-up'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    // echo $email . "<br>";
    // echo $password . "<br>";
    // echo $confirm_password . "<br>";
    $email_regex = "/^[a-zA-Z0-9]{3,30}[@]{1}[a-z0-9]{2,20}[.]{1}[a-z]{2,6}$/";

    // var_dump(preg_match($email_regex, $email));
    // var_dump(preg_match_all($email_regex, $email));
    if(!preg_match($email_regex, $email)) {
        $email_msg = "<p style='color: red;'>Email is invalid</p>";
    } elseif(strlen($password) < 8) {
        $password_msg = "<p style='color: red;'>Passworn length must be minimum 8 characters</p>";
    } elseif($password != $confirm_password) {
        $confrm_password_msg = "<p style='color: red;'>Password does not match with confirm password</p>";
    } else {
        $msg = "<p style='color: green;'>Registration is successful</p>";
    }
     
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.Upload</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Email</label><br>
        <input type="text" name="email" id="email" value="<?= $email ?? "" ?>" required><br><br>
        <?= $email_msg ?? "" ?>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password" value="<?= $password ?? "" ?>" required><br><br>
        <?= $password_msg ?? "" ?>
        <label for="">Confirm Password</label><br>
        <input type="password" name="confirm-password" id="confirm-password" value="<?= $confirm_password ?? "" ?>" required><br><br>
        <?= $confrm_password_msg ?? "" ?>
        <button type="submit" name="sign-up">Sign Up</button>
    </form>
    <?= $msg ?? ""; ?>
</body>
</html>