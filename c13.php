<?php 

$fh = fopen('imenik.txt', 'a+');

fwrite($fh, 0);

echo filesize('imenik.txt');

// $counter = ($fh);
// echo $counter;
// $output = ($counter);
// echo $output;

 ?>