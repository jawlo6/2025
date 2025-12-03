<?php
class fruit {
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "first is {$this->name} and the color is {$this->color},";
    }
}
?>


<?php
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
