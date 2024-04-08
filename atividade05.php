<?php 

// DUPLA Arthur Netto & Jonathan Alves

	$idade1 = 18;
	$idade2 = 14;
	$idade3 = 17;
	$idadeMulher = 0;

	$sexo1 = 'f';
	$sexo2 = 'f';
	$sexo3 = 'm';

	$altura1 = 1.50;
	$altura2 = 1.40;
	$altura3 = 1.60;
	$maiorAltura = 0;
	$menorAltura = 0;
	


	

		if ($altura1 > $altura2 && $altura1 > $altura3 ) {

			$maiorAltura = $altura1;
 


		}elseif ($altura2 > $altura1 && $altura2 > $altura3 ) {

			$maiorAltura = $altura2;
 
 
		}elseif ($altura3 > $altura1 && $altura3 > $altura2 ) {

			$maiorAltura = $altura3;
 
		}
	


	if ($altura1 < $altura2 && $altura1 < $altura3 ) {

			$menorAltura = $altura1;
 


		}elseif ($altura2 < $altura1 && $altura2 < $altura3 ) {

			$menorAltura = $altura2;
 
 
		}elseif ($altura3 < $altura1 && $altura3 < $altura2 ) {

			$menorAltura = $altura3;
 
		}



	echo "a maior altura é $maiorAltura, e a menor altura é $menorAltura <br /> <br />";


	$media = ($altura1 + $altura2) / 2;
		echo "a média da altura das mulheres é $media "  ; 


		if ($idade1 > $idade2) {
			$idadeMulher = $idade1;
		
		}elseif ($idade2 > $idade1){
			$idadeMulher = $idade2;

		}

		echo "<br /> <br /> o homem mais velho tem $idade3 anos, e a mulher mais velha tem $idadeMulher anos";



 ?>
