<?php
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function __construct($name){
        $this->name = $name;
    }


    function get_name() {
        return $this->name;
    }
}
$apple = new Fruit("Apple");

echo $apple->get_name();
?>
