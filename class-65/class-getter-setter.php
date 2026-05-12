<?php
class Person
{
    private $name = "Mina";
    private $age;

    public function __get($_pname)
    {
        
        return $this->$_pname;
    }

    public function __set($_pname, $_pvalue)
    {
        $this->$_pname = $_pvalue;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge ($_age) {
        $this->age = $_age;
    }
}

$person = new Person();

$person->name = "John";
echo $person->name;
echo "<br>";

$person->name = "Oggy";
$person->setAge(20);
echo $person->name;
echo "<br>";
echo "<br>";
echo $person->getAge();



// $person->vname = "VJohn";
// echo $person->vname;

/*  Self assumed Benefits of setter and getter functions
  1. By setter and getter property accessing and reassinging can be controlled.
  1. A block of code can be execuded when a property is accessed.
  2. A block of code can be executed when a new property is declared in instance
  */