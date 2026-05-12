<?php 
$msg = "";
$msg2 = "";
if(isset($_POST['submit_btn'])) {
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $num3 = $_POST['num3'];
   

   if ($num1 > $num2 and $num1 > $num3) {
      $msg = "{$num1} is maximum";
   } elseif ($num2 > $num3) {
      $msg = "{$num2} is maximum";
   } else {
      $msg = "{$num3} is maximum";
   }

   if ($num1 < $num2 and $num1 < $num3) {
      $msg2 = "{$num1} is minimum";
   } elseif ($num2 < $num3) {
      $msg2 = "{$num2} is minimum";
   } else {
      $msg2 = "{$num3} is minimum";
   }
//    echo "<br>";
  
//    echo "<br>";
//    echo $msg;

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
        <input type="number" name="num1"><br><br>
        <input type="number" name="num2"><br><br>
        <input type="number" name="num3"><br><br>
        <button type="submit" name="submit_btn">Submit</button>
        <h2><?php echo $msg; ?></h2>
        <h2><?php echo $msg2; ?></h2>
    </form>
</body>
</html>

