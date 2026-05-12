<?php

class User
{
    public $name;
    public $age;
    protected $address = "Dhaka";
    private $password = "1234";
    static $country = "Bangladesh";
    public function __construct($_name, $_age)
    {
        $this->name = $_name;
        $this->age = $_age;
    }

    final function test()
    {
        // echo "Test form parent class<br>";
        echo "Address: {$this->address}<br>";
        echo "Password: {$this->password}<br>";
    }

    static function checkAge($_age = 0)
    {
        if ($_age > 18) {
            return "You are eligible to vote.<br>";
        } else {
            return "You will do politics with Zaima Rahman in future.<br>";
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


    public function test()
    {
        // echo "Test form parent class<br>";
        echo "Address: {$this->address}<br>";
        echo "Password: {$this->password}<br>";
    }
    public function info()
    {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "Course: {$this->course}<br>";
        echo "Year: {$this->year}<br>";
        echo "Address: {$this->address}<br>";
        // echo "Password: {$this->password}<br>";
    }
}

$shahed = new Trainee("WDPF", 2026, "Shahed", 25);
$mursalin = new Trainee("WDPF", 2026, "Mursalin", 29);

$mursalin->test();
echo "<br>";

$mursalin->info();
echo "<br>";

$shahed->test();
echo "<br>";
$shahed->info();
echo "<br>";

echo User::checkAge();
echo User::checkAge(20);
echo User::checkAge(18);