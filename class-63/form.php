<?php 
if(isset($_POST['sign_up'])) {
    $email =  isset($_POST['email']) ? $_POST['email'] : "";      
    echo isset($_POST['username']) ? $_POST['username'] : "Username not set";
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : "" ; ?>"><br>
        <label for="">Email</label><br>
        <input type="email" name="email" id="" value="<?= $email ?>"><br><br>
        <button type="submit" name="sign_up">Sign Up</button>
    </form>
</body>
</html>

