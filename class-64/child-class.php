<?php

class User
{
    public $name;
    public $age;
    public function __construct($_name, $_age)
    {
        $this->name = $_name;
        $this->age = $_age;
    }

    public function test()
    {
        echo "Test form parent class";
    }

    public function checkAge() {
        if ($this->age > 18) {
            return "{$this->name} is eligible to vote";
        } else {
             return "{$this->name} will do politics with Zaima Rahman";
        }
    }
}


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

class Academy extends Trainee
{
    public $session;
    public function __construct($_session, $_course, $_year, $_name, $_age)
    {
        parent::__construct($_course, $_year, $_name, $_age);
        $this->session = $_session;
    }

    public function sessionPrint()
    {
        echo "session is " . $this->session;
    }
}

$academy = new Academy(2020, "PHP", 2026, "Raju", 25);
$academy->info();
echo "<br>";

$academy->test();
echo "<br>";

$academy->sessionPrint();
