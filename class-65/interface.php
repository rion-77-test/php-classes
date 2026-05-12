<?php 
interface iTest1 {
    public function viewInfo();
}

interface iTest2 {
    public function showText();
}

class ChildClass implements iTest1, iTest2 {
    public $name = "Mina";
    public $email = "T7oP5@example.com";
    public function viewInfo() {
        echo "Name: $this->name <br> Email: $this->email <br>";
    }

    public function showText() {
        echo "A static Message <br>";
    }
}

$mina = new ChildClass();
$mina->viewInfo();

?>