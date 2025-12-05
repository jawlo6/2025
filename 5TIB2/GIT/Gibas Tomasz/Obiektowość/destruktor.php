<?php
class Fruit{
    public $name;
    public $color;

    function __construct(){
        $this -> name = $name;
    }

function __destruct(){
        echo "this fruit is {$this->name}.";
    }
    }
$apple = new fruit("Apple");
?>