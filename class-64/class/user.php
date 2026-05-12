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