<?php

class PersonInfo
{
    public string $name = "John";
    public int $age = 25;

    public function info()
    {
        echo "name: {$this->name}<br>";
        echo "age: {$this->age}<br>";
    }
}

$person = new PersonInfo();


echo "<pre>";
print_r($person);
echo "</pre>";

echo "<br>";
echo $person->name;
echo "<br>";
$person->name = "Raju";
echo $person->name;


echo "<br>";
$person->info();
