<?php
if (isset($_POST['submit'])) {
   /*  echo "<pre>";
    print_r($_FILES["image"]);
    echo "</pre>";
 */
    $file = $_FILES["image"];
    // echo $file["tmp_name"];
    echo "<br>";

    $final_path = "uploads/" . $file["name"];
    // move_uploaded_file($file["tmp_name"], $final_path);
    // echo $file['size'];

    if ($file['size']  > (120 * 1024)) {
        echo "File size should be less than 120 kb";
    } else {
        move_uploaded_file($file["tmp_name"], $final_path);
        echo "File uploaded successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>

</html>