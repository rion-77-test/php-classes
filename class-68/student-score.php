<?php
$arr = [
    "Mina" => 100,
    "Sara" => 70,
    "Rita" => 80,
    "Raju" => 101 - 81,
    "Omar" => 10
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $name => $score): ?>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $score ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h5>Highest Socre: <?= max($arr); ?></h5>
    <h5>Student Name: <?= array_search(max($arr), $arr); ?></h5>
</body>

</html>