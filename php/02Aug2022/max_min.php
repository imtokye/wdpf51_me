<?php
 $numbers=[80,55,45,85,77,99,123];
		$max=$numbers[0];
		$min=$numbers[0];

		for ($i=0; $i<count($numbers); $i++){
//Maximum Number
			if($max>$numbers[$i]){
				$max = $max;
			}
			else{
				$max = $numbers[$i];
			}
//Minimum number
			if($min<$numbers[$i]){
				$min = $min;
			}
			else{
				$min = $numbers[$i];
			}
		}
		echo "<h1>Maximum number is : " . $max . "</h1>";
		echo "<h1>Minimum number is : " . $min . "</h1>";
        ?>