<p>Konstruktor jest automatycznie uruchamiany przy tworzeniu obiektu</p>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function __construct($name) {
    $this->name = $name;
  }
}

$apple = new Fruit("Apple");
echo $apple->name;


