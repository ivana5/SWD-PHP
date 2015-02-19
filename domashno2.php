<?php
	
	$a = $_POST['a'];
	$b = 2;

	if($a % 2 == 0){
		echo $a." IS divisible by ".$b;
	}

	elseif($b % 1 == 0)  {
    	echo $a." is NOT divisible by ".$b;
	}

?>