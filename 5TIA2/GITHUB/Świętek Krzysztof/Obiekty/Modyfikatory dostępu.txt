<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;
}
$mango = new Fruit();
$mango->name='manho'; //ok
$mango->color='yellow';//error
$mango->weight='400';//eroor
?>
