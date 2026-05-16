<?php
$student_arr = [
    "Mursalin" => "80",
    "Masum" => "75",
    "Fahim" => "68",
    "Hridoy" => "55",
    "Imrul" => "49",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Students Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php foreach($student_arr as $name => $score) : ?>
        <tr>
            <td><?= $name; ?></td>
            <td><?= $score; ?></td>
        </tr>
        <?php endforeach;   ?>
    </table>
    <p>Highest mark: <?= max($student_arr); ?></p>
    <p>Student Name: <?= array_search(max($student_arr), $student_arr); ?></p>
</body>
</html>