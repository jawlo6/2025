<?php


class Fruit {
    public $name;
    public $color;


    function __construct($name) {
        // Ta linia prawdopodobnie jest w ciele konstruktora,
        // ale została pominięta na tym slajdzie dla zwięzłości (zakładając, że to kontynuacja poprzedniego przykładu).
        // $this->name = $name;
    }


    function __destruct() {
        echo "The fruit is {$this->name}.";
    }
}


$apple = new Fruit("Apple");


// Brak dalszego kodu, ale wywołanie destruktora nastąpi po zakończeniu skryptu
// lub gdy obiekt zostanie jawnie usunięty lub przestanie być używany.
?>
