<?php 

$gradovi = array('Bitola','Skopje','Makedonski Brod','Tetovo','Ohrid','Strumica','Makedonska Kamenica','Kumanovo','Gostivar','Demir Kapija','Vinica', );
// $dolzina = count($gradovi);


foreach ($gradovi as $key => $grad) {
	$dolzina = strlen($grad);

	if ($dolzina % 2 == 0 ) {
		echo ($grad);
		echo '<br>';
	}
}

echo '<hr>'; 

// print_r($gradovi);

// for ($i = 0; $i < $dolzina ; $i++) { 
// 	echo $gradovi[$i];
// 	echo '<br>';
// }

// foreach ($gradovi as $grad) {
// 	echo $grad;
// 	echo '<br>';
// }

// $student = array('ime' => 'Bojan', 'prezime' => 'Gavrovski', 'prosek' => 7.4);

// foreach ($student as $info) {
//  	echo $info;
//  	echo '<br>';
//  }

 // foreach ($student as $kluc => $info) {
 //  	echo '<b>' .$kluc. '</b>: ';
 //  	echo $info;
 //  	echo '<br>';
 //  }

$a = 1;

while ($a < 10) {
	echo 'pomalo <br>';
	$a++;
}

echo '<hr>';

$b = 0;

while ($b < 50) {
	$b++;
	if ($b % 2 == 1) {
		echo $b;
		echo '<br>';
	}
}

 ?>