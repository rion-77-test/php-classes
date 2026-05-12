<?php

class User
{
    public string $name;
    public int $age;

    public function __construct(string $_name, int $_age) {
        $this->name = $_name;
        $this->age = $_age;
    }
    public function __toString() {
        return "This is a object moron";
    }
    public function __destruct() {
        echo "Object is deleted form existence";
        return "alvida";
    }


}

$user = new User("Raju", "25");

echo $user->name;
echo "<br>";
echo $user;
echo $user->age;
unset($user);
// echo $user;

