============================================================

<?php
class Vehicle {
    public $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    protected function odglos() {
        echo "Pojazd $this->brand wydaje dźwięk<br>";
    }
}

class Car extends Vehicle {
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function message() {
        echo "Czy jestem pojazdem czy samochodem?<br>";
    }
}

$car = new Car("BMW", "toyota");


$car->message();   
$car->odglos();    
?>
