<?php
class Fruit {
  public $name = "";
  public $color = "";

  function __construct() {
    $this->name = "test"; 
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
echo $apple->get_name();



	// class Aritmatika{
    // 	public $x;
    //     public $y;
        
    //     function __construct($x, $y){
    //     	$this->x = $x;
    //         $this->y = $y;
    //     }
    // }
    
    // $x = 2;
    // $y = 3;
    
    // $A = new Aritmatika($x, $y);
    // echo $A->x;
