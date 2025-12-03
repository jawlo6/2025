<?php
class Animal {
    public function sound() {
        echo "Zwierzę wydaje dźwięk";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Pies szczeka!";
    }
}

$dog = new Dog();
$dog->sound();  // Wynik: Pies szczeka!
?>
