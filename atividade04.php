<?php 
	
	$num1 = 20;
	$num2 = 30;
	$num3 = 40;

	if ($num1 > $num2 && $num2 > $num3) {

		echo "$num1 , $num2 e $num3";
	}elseif ($num2 > $num1 && $num1 > $num3) {
		echo "$num2, $num1, $num3";
	} elseif ($num3 > $num1 && $num1 > $num2) {
		echo "$num3, $num1, $num2";
	}elseif ($num1 > $num3 && $num3 > $num2) {
		echo "$num1, $num3, $num2";
	}elseif ($num2 > $num3 && $num3 > $num1) {
		echo "$num2, $num3, $num1";
	}elseif ($num3 > $num2 && $num2 > $num1) {
		echo "$num3, $num2, $num1";
	}

	

 ?>