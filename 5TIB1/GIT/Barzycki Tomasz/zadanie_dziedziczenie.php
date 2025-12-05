<?php
// Klasa bazowa
class Vehicle {
    public $brand;


    public function __construct($brand) {
        $this->brand = $brand;
    }


    public function odglos() {
        echo "Pojazd wydaje dźwięk.\n";
    }
}


// Klasa pochodna
class Car extends Vehicle {
    public $model;


    public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }


    // Nadpisanie metody odglos()
    public function odglos() {
        echo "Samochód $this->brand $this->model robi: brum brum!\n";
    }
}


// Utworzenie obiektu pochodnego
$car = new Car("Toyota", "Corolla");
$car->odglos();
?>
