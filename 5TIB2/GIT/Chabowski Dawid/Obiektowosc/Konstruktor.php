<p>Konstruktor jest automatycznie uruchamiany podczas tworzenia obiektu</p>
<?php 
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }
    $apple = new Fruit('Apple');   
    echo $apple->get_name();       
?>