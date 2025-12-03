<?php
class fruit {
    public $name;
    public $color;
    function __construct($name) {
        $this->name = $name;
    }
    function __destruct(){
        echo "the fruit is {$this->name}.";
    }
}

$apple = new Fruit("apple");
?>