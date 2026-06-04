<?php
require_once 'db.php';

//Add manufacture 
if (isset($_POST['add_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    $db->query("CALL createManufacturer('$name', '$address')");
}


// Delete manufacturers
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    
    $db->query("DELETE FROM manufactures WHERE id = $id ");
}

// Show all manufactures
$result = $db->query("SELECT * FROM manufactures ORDER BY id DESC");


if ($result) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
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
        <a href="manufacturer.php">Manufacturers</a>
        <a href="product.php">Products</a>
    </nav>
    <h1>Add new manufacturer</h1>
    <form action="manufacturer.php" method="post">
        Name: <br>
        <input type="text" name="name"><br><br>
        Address: <br>
        <input type="text" name="address"><br><br>
        <input type="submit" name="add_mfg" value="Add manufacturer"><br><br>
    </form>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php foreach ($rows as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["address"] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="delete_id" value="<?=$item['id']?>">
                        <input type="submit" name="delete_btn" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>