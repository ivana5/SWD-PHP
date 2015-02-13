<?php 

	$broj = $_POST['broj'];
	$stepeni = $_POST['stepeni'];

	if($stepeni == 'f'){
		echo $broj * 9/5 + 32 ." fareheit";
	}

	if($stepeni == 'c'){
		echo ($broj - 32) * 5/9 ." celzius";
	}
 ?>