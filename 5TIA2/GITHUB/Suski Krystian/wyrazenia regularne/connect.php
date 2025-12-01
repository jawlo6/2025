<?php
class Fruit {
    public $name;
    public $color;




    function __constrctor($name) {
        $this->name = $name;
    }


        function __destruct($name) {
        echo "the fruit is {$this->name}."
    }




    function get_name() {
        return $this->name;
    }
}


$apple =new Fruit("Apple");//tworzenie oiektu


echo $apple->get_name();


?>
