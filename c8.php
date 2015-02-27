<?php 

	function zdravo(){
		echo "Zdravo Svetu";
		echo "<br>";
	}

	zdravo();
	zdravo();
	zdravo();
	zdravo();
	zdravo();
	zdravo();
	zdravo();
	zdravo();

	function pero(){
		echo "Pero nash golem maz";
		echo "<br>";
	}

	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();
	pero();

	function mleko($tip){
		echo $tip;
	}

	mleko('Bitolsko');
	mleko('Tursko');

	function sobiranje($a, $b){
		echo "<hr>";
		echo $a + $b;
	}

	sobiranje(4, 6);
	sobiranje(10, 57);
	sobiranje(254640, 5214234357);

	function odzemanje($c, $d){
		echo "<hr>";
		echo $c - $d;
	}

	odzemanje(78, 52);
	odzemanje(12587, 458);
	odzemanje(2416468767, 354354681);

	function delenje ($prva, $vtora){
		echo "<hr>";
		echo $prva / $vtora;
	}

	delenje(24, 8);
	delenje(125, 25);
	delenje(100, 4);

	function mnozenje($x, $y){
		echo "<hr>";
		echo $x * $y;
	}

	mnozenje(2, 4);
	mnozenje(10, 12);
	mnozenje(11, 222);

	function pozdrav($ime='Bojan'){
		echo "<br>";
		echo 'Zdravo '.$ime;
	}

	pozdrav('Pero');
	pozdrav();

	function parno_neparno($ime){
		echo "<hr>";
		$dolzina = strlen($ime);

			if ($dolzina % 2 == 0) {
				echo "paren broj na bukvi";
			}else{
				echo "neparen broj na bukvi";
			}

	}

	parno_neparno('Bojan');
	parno_neparno('Aleksandar');
	parno_neparno('Ivana');
	parno_neparno('Pero');

	function sob($a, $b){
		return $a + $b;
	}

	// $rezultat = sob(22, 50);
	// echo "<hr>";
	// echo $rezultat;

	echo sob(30, 70);

	function odz($c, $d){
		return $c - $d;
	}

	echo "<hr>";
	echo odz(12, 6);

	function mnoz($x, $y){
		return $x * $y;
	}

	echo "<hr>";
	echo mnoz(25,78);

	function del($q, $w){
		return $q / $w;
	}

	echo "<hr>";
	echo del(90, 14);
 ?>