<?php
    class Human {

        public $name;
        
        // public function dance
        public function dance() {
            echo $this->name. " is dancing...<br/>";
        }
        
        // public function laugh
        public function laugh() {
            echo $this->name. " is laughing...<br/>";
        }
    }
    
  
    class Male extends Human {
    }
    
  
    class Female extends Human {
    
    }
    
    $male = new Male();
    $male->name = "Ram";
    
    $female = new Female();
    $female->name = "sita";
    
    
    $female->dance();
    $male->laugh();
    
?>