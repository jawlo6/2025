<?php
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function __construct($name){
        $this->name = $name;
    }


    function __destruct(){
        echo "The fruit is {$this->name}";
    }
}
$apple = new Fruit("Apple");

?>
