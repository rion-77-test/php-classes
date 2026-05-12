<?php

abstract class Test
{
    public $name = "Rakibul";

    public function getName()
    {
        return $this->name;
    }

    abstract public function getAge();
    abstract public function viewDetails();
}

class Person extends Test
{
    public $age = 25;
    public function getage()
    {
        return $this->age;
    }

    public function viewDetails()
    {
        return $this->name;
    }
}


$person = new Person();

// $test = new Test();
echo $person->viewDetails();
echo "<br>";
echo $person->getAge();
