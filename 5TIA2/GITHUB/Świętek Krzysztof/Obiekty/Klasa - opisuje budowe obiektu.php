<?php 
class Fruit {
    //Properties 
    public $name;
    public $color;


    //methods 
    function set_name ($name){
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}