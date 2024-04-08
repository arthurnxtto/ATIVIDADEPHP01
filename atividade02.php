<?php 

$valor =33;

if ($valor % 10 == 0 && $valor % 5 == 0 && $valor % 2 == 0) {
	echo "Este valor é divisivel por 10, 5 e 2";
}elseif ($valor % 5 == 0) {
	echo "Este valor é divisivel por 5";
}elseif ($valor % 2 == 0) {
	echo "Este valor é divisivel por 2";
}else{
	echo "Este valor não é divisivel por esses 3 numeros";
}


 ?>	