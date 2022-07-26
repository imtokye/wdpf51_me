<?php 
class oop {
    public function __construct($x){
        $this->name = $x;
        echo $this->name . "Yes, It's me the object oop . I am here <br>";
    }
    public function sayHello(){
        echo "Hello World";
        
    }
    public function __destruct(){
        echo "OOP Object Says bye bye!";
    }

}

$ob = new oop("Dipu");
$ob->sayHello();

?>