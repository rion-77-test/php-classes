<?php

require_once ("user.php");


class Trainee extends User
{
    public $course;
    public $year;

    public function __construct($_course, $_year, $_name, $_age)
    {
        parent::__construct($_name, $_age);
        $this->course = $_course;
        $this->year = $_year;
    }

    public function info()
    {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "Course: {$this->course}<br>";
        echo "Year: {$this->year}<br>";
    }
}

$shahed = new Trainee("WDPF", 2026, "Shahed", 25);
$mursalin = new Trainee("WDPF", 2026, "Mursalin", 29);

$mursalin->info();
echo "<br>";

$shahed->info();
echo "<br>";
