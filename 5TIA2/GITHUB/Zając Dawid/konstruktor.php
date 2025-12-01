<p> Konstruktor jest automatycznie uruchamiany przy tworzeniu obiektu <p>
    <?php
    class fruit{
        public $name;
        public $color;

        function __construct($name){
            $this->name = $name;
        }
            function get_name(){
             return $this->name;
            }
 
    }

    $apple = new Fruit ("apple");
   echo $apple -> get_name();
    ?>