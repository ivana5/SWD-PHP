<?php 

	$u = 'a , c';
	$p = 'b, d';
	$link_address = '#';

		if ($_POST['u'] == 'a' && $_POST['p'] == 'b') {
			echo '<a href="$link_address">L1</a>'.' <a href="$link_address">L2</a>'.' <a href="$link_address">L3</a>';

		} else if ($_POST['u'] == 'c' && $_POST['p'] == 'd') {
			echo '<a href="$link_address">L1</a>'.' <a href="$link_address">L2</a>'.' <a href="$link_address">L3</a>'.' <a href="$link_address">L4</a>'.' <a href="$link_address">L5</a>';

		} else{
			echo 'WRONG USER';
		}


 ?>