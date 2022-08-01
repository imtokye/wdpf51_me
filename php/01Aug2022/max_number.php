<?php 
function largest(){
    $number = array (20,30,40,50,60,70,80);
    $max =0;

    for($i =0; $i < count($number); $i++){
        if($number[$i] > $max){
            $max = $number[$i];
        }else{
            $max = $max;
        }
    }return $max;
}
echo largest();

?>