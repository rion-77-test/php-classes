<?php
// const PASS = "123";
// define("PASSWORD", "123");
$pass = 123;

$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
// echo $hashed_pass;
echo "<br>";

// $hashed_pass2 = password_hash($pass, PASSWORD_DEFAULT);
// echo $hashed_pass2;

if(password_verify($pass, $hashed_pass)) {
    echo "Password is valid";
} else {
    echo "Passworid is not valid";
}