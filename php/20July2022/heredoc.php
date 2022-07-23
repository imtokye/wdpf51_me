<?php 
$students = array("Dipu"=>"Barishal", "Rabbany"=>"Thakurgaon");
// no space or tab after identification
echo <<<ABC
WE have tow students. One is Dipu and another is Rabbany.
Dipu's home district is {$students ['Dipu']} and 
Rabbany's home district is {$students ['Rabbany']}; <br>
ABC;

// no space or tab before declcaring  identification
$dipu = "Barishal";
$rabbany = "Thakurgaon";
echo <<<DEF
WE have tow students. One is Dipu and another is Rabbany.
Dipu's home district is $dipu and Rabbany's home district is $rabbany;  
DEF;


?>