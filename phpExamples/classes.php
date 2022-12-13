<?php 
class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }

    function set_color($colorName){
        $this->color=$colorName;
    }

    function get_color(){
        return $this->color;
    }
  }




  $apple = new Fruit();


$banana = new Fruit();


$apple->set_name('Apple');

$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo "<br>";
$apple->set_color("red");
$banana->set_color("yellow");


echo $apple->get_color();

echo "<br>";

echo $banana->get_color();
echo "<br>";


?>