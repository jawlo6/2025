<p> Destruktor jest automatycznie uruchamiany podczas usuwania obiektu </p>
<?php  
    class Fruit {
        public $name;
        public $color;

        
        function __construct($name) {
            $this->name = $name;
        }

        
        function __destruct() {
            echo "Destruktor: Obiekt " . $this->name . " został usunięty.<br>";
        }
    }

    $apple = new Furit('Apple');    
    echo $apple->get_name();        
    echo "<br>";
    unset($apple);                  
?>