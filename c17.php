<?php 

class Flomaster{
	//properties
	private $boja = 'crna';
	private $visina = '20cm';
	private $shirina = '3cm';
	//methods
	public function setBoja($b){
		$this->boja = $b;//$this - referenca
	}
	public function setVisina($c){
		$this->visina = $c;
	}
	public function setShirina(){
		$this->shirina = '2cm';
	}
	public function getBoja(){
		return $this->boja;
	}
	public function getShirina(){
		return $this->shirina;
	}
	public function getVisina(){
		return $this->visina;
	}
}

$f1 = new Flomaster; //objekti - instanci od klazsata flomaster
// $f1->visina = '25cm';
$f1->setBoja('rozeva');
$f1->setVisina('12cm');
$f1->setShirina();

$f2 = new Flomaster; //objekti - instanci od klazsata flomaster
// $f2->boja = 'crvena';
// $f2->shirina = '4cm';
$f2->setBoja('ciklama');
$f2->setShirina();
$f2->setVisina('18cm');

// echo $f1->boja;

echo $f1->getBoja();
echo '<br>';

echo $f2->getShirina();
echo '<br>';

echo $f1->getVisina();
echo '<hr>';

// print_r($f1);
// print_r($f2);

class Student{
	private $ime = 'Ivana';
	private $br_index = 5550;

	public function setIme($a){
		$this->ime = $a;
	}
	public function setBr_index($b){
		$this->br_index = $b;
	}
	public function getIme(){
		return $this->ime;
	}
	public function getBr_index(){
		return $this->br_index;
	}
}

$f1 = new Student;
$f1->setIme('Ardi');
$f1->setBr_index(2563);


echo $f1->getIme();
echo '<br>';

echo $f1->getBr_index();
echo '<br>';

class Profesor{
	private $den = 'petok';
	private $predmet = 'Web-tehnologii';

	public function setDen($c){
		$this->ime = $c;
	}
	public function setPredmet($d){
		$this->predmet = $d;
	}
	public function getDen(){
		return $this->den;
	}
	public function getPredmet(){
		return $this->predmet;
	}
}

$f2 = new Profesor;
$f2->setDen('sekoj den');
$f2->setPredmet('chasovi so Bojan');

echo $f2->getDen();
echo '<br>';
echo $f2->getPredmet();

 ?>