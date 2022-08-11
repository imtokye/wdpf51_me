<?php 
class Fruit {
   public function intro(){
    echo "I am intro class";
   }
}

class Strawberry extends Fruit {
    public function intro(){
        echo "I am intro from class";
    }
}

$obj = new Strawberry;
$obj->intro();


?>