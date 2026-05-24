<?php
require_once "db-config.php";

if(isset($_GET["id"])) {

// Fetching data of current id from database
    $id = $_GET["id"];
    // echo $id;
    $result = $db->query("SELECT * FROM manufactures WHERE id= $id");
    if($result) {
        $mfg = $result->fetch_assoc();
        // echo "<pre>";
        // print_r($mfg);
        // echo "</pre>";
    } 
 
// Updating data of current id

if(isset($_POST['update_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $active = $_POST['active'] ? 1 : 0;
    echo $name;
    echo $address;
    echo $active;

    $db->query("UPDATE manufactures SET name='$name', address='$address', is_active=$active WHERE id=$id");

    header("Location: manufacturer.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Edit</title>
</head>

<body>
    <nav>
        <a href="manufacturer.php">Manufacturer</a>|
        <a href="product.php">Product</a>
    </nav>
    <h3>Manufacturer Edit</h3>
     <?php  if(isset($mfg)) : ?>
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?= $mfg['name'] ?? "" ?>">
        <br><br>
        <label for="address">Address</label><br>
        <textarea type="text" name="address" id="address"><?= $mfg['address'] ?? '' ?></textarea>
        <br><br>
        <input type="checkbox" name="active" id="active" <?= $mfg['is_active'] ? "checked" : '' ?>>
        <label for="active">Is active</label><br>
        <br><br>
        <button type="submit" name="update_mfg">Update</button>
    </form>
    <?php  endif ?>
</body>

</html>