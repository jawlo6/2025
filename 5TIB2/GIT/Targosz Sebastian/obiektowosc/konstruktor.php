<?php
class fruit {
    // properties
    public $name;
    public $color;

    // methods
    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
?>