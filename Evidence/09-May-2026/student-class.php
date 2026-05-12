<?php
class Student
{
    public $id;
    public $name;
    public $score;
    public $grade;

    function __construct($_id= null, $_name = null, $_score = null, $_grade = null) {
        $this->id = $_id;
        $this->name = $_name;
        $this->score = $_score;
        $this->grade = $_grade;
    }

    // function __construct($_id) {
    //     $this->id = $_id;
    //     $file = fopen("student.csv", "r");
    //     while ($row = fgetcsv($file)) {
    //          if ($_id == $row[0]) {
    //          $this->id = $_id;
    //            $this->name = $row[1];
    //            $this->score = $row[2];
    //            $this->grade = $row[3];
    //            break;
    //         }
    //     }
    //     fclose($file);

    //      $this->result($_id)
    // }

     /* function result($_id)
    {
        $html = "";
                $html .= "
                ID: $this->id<br>
                Name: $this->name<br>
                Score: $this->score<br>
                Grade: $this->grade<br>
                ";
            
        
        return $html;
    }  */

    function result($_id)
    {
        $html = "";
        $file = fopen("student.csv", "r");
        while ($row = fgetcsv($file)) {
            if ($_id == $row[0]) {
                $html .= "
                ID: $row[0]<br>
                Name: $row[1]<br>
                Score: $row[2]<br>
                Grade: $row[3]<br>
                ";
            }
        }
        fclose($file);
        return $html;
    }
}
$student = new Student();

if(isset($_POST['login'])) {
    $id = $_POST['id'];

    if(!empty($id)) {
      $result = $student->result($id);
    } else {
        $result = "Please enter an id";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.Student Class</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Enter the student id</label><br>
        <input type="search" name="id" id="">
        <button type="submit" name="login">Search</button>
    </form>
    <p><?= $result ?? "" ?></p>
</body>

</html>