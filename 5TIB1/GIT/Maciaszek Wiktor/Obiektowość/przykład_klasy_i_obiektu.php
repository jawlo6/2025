<?php
class Car {
    public $color;
    public $brand;

    function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    function describe() {
        return "To jest $this->color $this->brand.";
    }
}

// Tworzenie obiektu
$car1 = new Car("BMW", "czarne");
$car2 = new Car("Toyota", "czerwone");

echo $car1->describe();
echo "<br>";
echo $car2->describe();
?>
