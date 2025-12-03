<?php
class Person {
    private $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    function showName() {
        return "Imię: " . $this->name;
    }
}

$p1 = new Person("Jan", 25);
echo $p1->showName();
echo "<br>Wiek: " . $p1->age;
?>
