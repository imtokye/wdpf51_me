<?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

    foreach($numbers as $num){
        if($num%2==0){
            echo "$num is an even number. <br>";
        }else{
            echo "$num is an odd number. <br>";
        }
    }

?>