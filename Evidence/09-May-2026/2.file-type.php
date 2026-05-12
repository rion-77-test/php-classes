<?php
if(isset($_POST['login'])) {
   $file = $_FILES['file'];
//    echo "<pre>";
//    print_r($file);
//    echo "</pre>";

   if(!($file["type"] === "image/jpeg" || $file["type"] === "image/png" || $file["type"] === "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||$file["type"] === "application/pdf")) {
    $msg = "Please upload a PDF/IMAGE/Documnet";
   } elseif($file["size"] > 400 * 1024) {
    $msg = "File size cannot be more than 400kb";
   } else {
    move_uploaded_file($file["tmp_name"], $file["name"]);
     $msg = "File uploaded successfully";
     $img = "<img style='height: auto; width: 300px;' src='{$file['name']}'>";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.File Type</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Select a file</label><br>
        <input type="file" name="file" id=""><br><br>
        <button type="submit" name="login">Upload</button>
    </form>
    <p><?= $msg ?? "" ?></p>
    <?= $img ?? "" ?>
</body>
</html>