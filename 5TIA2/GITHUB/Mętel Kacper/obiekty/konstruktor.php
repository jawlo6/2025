<?php
    class fruit {
        public $name;
        public $color;


        function __construct($name){   //konstruktor
            $this -> name = $name;
        }
        function get_name(){
            return $this -> name;
        }
    }

    $apple = new fruit("Apple");
    echo $apple -> get_name();
?>