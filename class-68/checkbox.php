<?php
if(isset($_POST['submit_checkbox'])) {
    $skill = $_POST["check"] ?? [];

    if (count($skill) <= 0) {
        echo "Please select atleast one skill";
    } else {
        echo "You selected " . count($skill) . " skills<br>";
        echo "Selected numbers are " . (implode(",",$skill));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="" method="POST">
        <input type="checkbox" name="check[]" value="1">1
        <input type="checkbox" name="check[]" value="2">2
        <input type="checkbox" name="check[]" value="3">3
        <input type="checkbox" name="check[]" value="4">4
        <input type="checkbox" name="check[]" value="5">5
        <input type="checkbox" name="check[]" value="6">6
        <input type="checkbox" name="check[]" value="7">7
        <input type="submit" value="submit" name="submit_checkbox">
    </form>    
   <!--  <script>
        let form = document.querySelector('form');
        form.addEventListener("submit", (e)=> {
            // e.preventDefault();
            console.log(document.querySelectorAll("input[name='check[]']"));
            // form.submit();       
        });
    </script> -->
</body>
</html>