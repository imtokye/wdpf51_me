<?php 

class Employee
{
 private $name;
 private $title;
 protected $wage;
 public function getName() {
 return $this->name;
 }
 public function setName($name) {
 $this->name = $name;
 }
 public function sayHello() {
 echo "<br>Hi, my name is {$this->getName()}.";
 }

 public function setWage($money){
    $this->wage = $money;
 }
}

//////////////////////////////////////////////////////////////////////
// $obj = new Employee();
// $obj->setname("Tokye");
// $obj->setWage(10000);
// echo $obj->getname();
// $obj->sayhello();

    class Programmer extends Employee {
        public function bonus($percent){
        $amount = $this->wage * $percent /100;
        return $amount;
        }
    }

$obj1 = new Programmer();
$obj1->setName("Tokye");
$obj1->setWage(10000);
echo $obj1->bonus(5);
//print_r($obj1);


?>