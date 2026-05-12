<?php
/* echo $_GET['email'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "post method";
} elseif($_SERVER['REQUEST_METHOD'] == 'GET')  {
    echo "get method"; 
} */
$name_error = "";
$email_error = "";
$msg = "";

if (isset($_GET["form_email"])) {
    $username = $_GET['username'];
    $email = $_GET['email'];

    $reg_username = '/^[@]{1}[a-zA-Z]{4,8}$/';
    $reg_email = '/^[a-zA-Z0-9._]{3,30}[@]{1}[a-zA-Z0-9-]{2,20}[.]{1}[a-zA-Z]{2,6}$/';



    if (!preg_match($reg_username, $username)) {
        $name_error =  "Username must start with one @ sign, then  letters, and must be between 4-8 characters";
    } else {
        $name_error =  "";
    }

    if (!preg_match($reg_email, $email)) {
        $email_error =  "Email is not valid";
    } else {
        $email_error =  "";
    }

    if ($name_error == "" && $email_error == "") {
        $msg = "Form submitted successfully";
    }

    // if ($email_error == "") {

    // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
    <style>
        .error-text {
            color: red;
        }

        .success-msg {
            color: green;
        }
    </style>
</head>

<body>
    <form method="GET">
        <label>Username</label><br>
        <input type="text" name="username" value="<?= $username ?? "" ?>"><br><br>
        <div class="error-text"><?= $name_error ?? ""; ?></div>

        <label>Email</label><br>
        <input type="text" name="email" value="<?= $email ?? "" ?>"><br>
        <div class="error-text"><?= $email_error ?? ""; ?></div>

        <input style="margin-top: 10px;" type="submit" name="form_email" value="submit">
        <div class="success-msg"><?= $msg ?? ""; ?></div>
    </form>
</body>

</html>