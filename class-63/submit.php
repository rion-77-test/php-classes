<h1>Form Submitted</h1>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$name = $_POST['username'];
$email = $_POST['email'];

echo "<br>";
echo $name;
echo "<br>";
echo $email;
?>