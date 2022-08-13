<?php 
class Teacher {
    public $name;
    public $age;
    public $qualification;

 function teach(){

 }
 function assigment(){

 }
}

class Student {

}

$st = new Student();

if($st instanceof Student){
    echo "Yes";
}else{
    echo "No";
}
echo "<pre>";
echo class_exists("Teacher");
echo "<pre>";
echo get_class($st);
echo "<pre>";

$methods = get_class_methods("Teacher");
print_r($methods);
echo "<pre>";
$vars = get_class_vars("Teacher");
print_r($vars);

?>