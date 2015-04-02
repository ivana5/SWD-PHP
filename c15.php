<?php

$niza = array(
	array(
		'ime' => 'Dragi',
		'prezime' => 'Tanchev',
		'email' => 'dragitancev@gmail.com',
		),
	array(
		'ime' => 'Ivana',
		'prezime' => 'Korovesovska',
		'email' => 'ivanak@gmail.com',
		),
	array(
		'ime' => 'Ardi',
		'prezime' => 'Demirovikj',
		'email' => 'ardibe@gmail.com',
		),
	array(
		'ime' => 'Marko',
		'prezime' => 'Janevski',
		'email' => 'marche@gmail.com',
		),
	array(
		'ime' => 'Marko',
		'prezime' => 'Tanaskoski',
		'email' => 'markostari@gmail.com',
		)
	);

// $max_ime = 0;
// $ime = '';
// $min_prezime = 100;
// $prezime = '';


// 	foreach ($niza as $key) {
// 		if(strlen($key['ime']) > $max_ime){
// 			$max_ime = strlen($key['ime']);
// 			$ime = $key['ime'];
// 		}

// 		if(strlen($key['prezime']) < $min_prezime){
// 			$min_prezime = strlen($key['prezime']);
// 			$prezime = $key['prezime'];
// 		}

// 	}


// 	echo "Najdolgo ime: ".$ime;
// 	echo "<br>";
// 	echo "Najkratko prezime: ".$prezime;

$min_ime = 100;
$ime = '';
$max_prezime = 0;
$prezime = '';

foreach ($niza as $key) {
	if (strlen($key['ime']) < $min_ime) {
		$min_ime = strlen($key['ime']);
		$ime = $key['ime'];
	}

	if (strlen($key['prezime']) > $max_prezime) {
		$max_prezime = strlen($key['prezime']);
		$prezime = $key['prezime'];
	}
}

echo "Najkratko ime ".$ime;
echo "<br>";
echo "Najdolgo prezime ".$prezime;
echo "<hr>";

$shkolo = array(
	array('predmet' => 'matematika', 'br_studenti' => '12'),
	array('predmet' => 'fizika', 'br_studenti' => '18'),
	array('predmet' => 'programiranje', 'br_studenti' => '32'),
	array('predmet' => 'hemija', 'br_studenti' => '4'),
	array('predmet' => 'makedonski', 'br_studenti' => '10'),
	array('predmet' => 'istorija', 'br_studenti' => '15'));

$suma = 0;

	foreach ($shkolo as $predmet) {
		$suma += $predmet['br_studenti'];
	}

	echo 'Sredna vrednost na zapishani studenti po predmeti: '.$suma / count($shkolo);
	echo "<hr>";

$x = 0;

	foreach ($shkolo as $predmet) {
	 	$x > $predmet['br_studenti'];
	 		echo $predmet;

	 	if ($x > $predmet['br_studenti']) {
	 		echo $predmet;
	 	} else {

	 	}
	 }

	 echo "studenti: ".$x ; 

?>