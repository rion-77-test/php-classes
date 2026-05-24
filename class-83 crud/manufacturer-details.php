<?php
require_once "db-config.php";

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;
    $result = $db->query("SELECT * FROM manufactures WHERE id= $id");
    if($result) {
        $mfg = $result->fetch_assoc();
        // echo "<pre>";
        // print_r($mfg);
        // echo "</pre>";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Details</title>
</head>

<body>
    <nav>
        <a href="manufacturer.php">Manufacturer</a>|
        <a href="product.php">Product</a>
    </nav>
    <h3>Manufacturer Details</h3>
    <?php if(isset($mfg)) : ?>
                        <p>ID: <?= $mfg['id'] ?? "" ?></p>
                        <p>Name: <?= $mfg['name'] ?? "" ?></p>
                        <p>Address: <?= $mfg['address'] ?? "" ?></p>
                        <p>Active Status: <?= $mfg['is_active'] ? "Active" : "Inactive" ?></p>
    <?php endif ?>
</body>

</html>