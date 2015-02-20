<?php 
	
	// $ime = 'Ivana';

	// if(strlen($ime) % 2 == 0){
	// 	echo "parno ime";
	// } else {
	// 	echo "neparno ime";
	// }
	
	$ime = 'Ivana';
	$dolzina = strlen($ime);
	$ostatok = $dolzina % 2;

	switch ($ostatok) {
		case 0:
			echo "parno";
			break;
		
		case 1:
			echo "neparno";
			break;
	}
	
 ?>