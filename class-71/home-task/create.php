<?php
require_once "files/student.class.php";

if(isset($_POST["add_student"])){
  // Take value from the form
  $id = $_POST["id"];
  $name = $_POST["name"];
  $batch = $_POST["batch"];
  echo "ID: {$id}<br> Name: {$name}<br> Batch: {$batch}";

  // Create an object 
  $s = new Student($id, $name, $batch);

  // Call save method
  $msg = $s->save();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="create.php">New Student</a>
        | 
        <a href="list.php">Students List</a>
        | 
        <a href="search.php">Find Student</a>
    </nav>
    <h3>Add new student</h3>
    <h4 style="color:green"><?= $msg ?? "" ?></h4>
    <form action="" method="POST">
        <label for="id">ID</label><br>
        <input type="number" name="id" id="id"><br><br>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label for="batch">Batch</label><br>
        <input type="number" name="batch" id="batch"><br><br>
        <button type="submit" name="add_student">Save</button>
    </form>
</body>
</html>