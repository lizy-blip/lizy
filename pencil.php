<?php
class pencil {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function __destruct() {
    echo "The pencil is {$this->name} and the color is {$this->color}."; 
  }
}

$lizy = new pencil("natraj","black");
?>