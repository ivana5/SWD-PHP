<?php 

$studenti = array (
	array('ivana korovesovska' => 5550, ),
	array('ardi demirovikj' => 4569, ),
	array('ilmi ramadani' => 2356, ));


print_r($studenti);
echo "<hr>";

//sortiranje  niza

$predmeti =  array(
	array('predmet' => 'Matematika', 'br_studenti' => 10),
	array('predmet' => 'Makedonski', 'br_studenti' => 12),
	array('predmet' => 'Fizika', 'br_studenti' => 28),
	array('predmet' => 'Programiranje', 'br_studenti' => 11),
	array('predmet' => 'Hemija', 'br_studenti' => 5),
	array('predmet' => 'Biologija', 'br_studenti' => 31),
);
	function raspored ($a, $b){
		if($a['br_studenti'] < $b['br_studenti']){
			return 1;
		}
	}
echo "<hr>";

uasort($predmeti, 'raspored');
print_r($predmeti);

// otvaranje file, zapishuvanje, zatavranje; povtorno otvaranje i golemina na file

$fh = fopen('ivana.txt', 'a+');
fwrite($fh, 'ivana');
fclose($fh);

$fh = fopen('ivana.txt', 'a+');
echo fread($fh, filesize('ivana.txt'));

 ?>