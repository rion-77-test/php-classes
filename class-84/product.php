<?php
require_once 'db.php';

$sql = "
SELECT p.* , m.name mfg FROM  products AS p, manufactures as m WHERE p.manufacture_id = m.id
";
$result = $db->query($sql);

$rows = null;

if ($result) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
}

$view = $db->query("SELECT * FROM vw_product_list");
$viw_rows = $view->fetch_all(MYSQLI_ASSOC);
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
    <h1>View produts more than 5000</h1>

    <table width="100%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Manufacturer ID</th>
            <th>Price</th>
            <th>Mfg</th>
        </tr>
        <?php foreach ($viw_rows as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["manufacture_id"] ?></td>
                <td><?= $item["price"] ?></td>
                <td><?= $item["mfg"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <!-- Products -->
    <h2>Products List</h2>
    <table width="100%" border="1" cellspacing="0" cellpadding="10">

        <!-- <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Manufacturer Id</th>
            <th>Price</th>
        </tr>
        <?php foreach ($rows as $item) : ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
            </tr>
        <?php endforeach; ?> -->

        <!-- <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Price</th>
        </tr>
        <?php foreach ($rows as $item) : ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
            </tr>
        <?php endforeach; ?> -->

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Manufacturer ID</th>
            <th>Price</th>
            <th>Mfg</th>
        </tr>
        <?php foreach ($rows as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["manufacture_id"] ?></td>
                <td><?= $item["price"] ?></td>
                <td><?= $item["mfg"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>