<?php
$students = [
    "Mursalin" => 82,
    "Shafi" => 73,
    "Jaber" => 64,
    "Masum" => 59,
    "Rion" => 46,
];

function gradeChecker($score)
{
    if ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } elseif ($score >= 50) {
        return "D";
    } elseif ($score < 50) {
        return "F";
    }
}

$loopcounter = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>SL No.</th>
                <th>Name</th>
                <th>Score</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($students as $student => $score):
            ?>
                <tr <?= $score === max($students) ? 'bgcolor="yellowgreen"' : "" ?>>
                    <td><?= ++$loopcounter; ?></td>
                    <td><?= $student ?></td>
                    <td><?= $score ?></td>
                    <td><?= gradeChecker($score) ?></td>
                </tr>

            <?php endforeach; ?>
        </thead>
    </table>
</body>

</html>