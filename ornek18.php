<?php
/*
	'kenar' özelliği ve 'cevre' metodu olan Kare sınıfını tanımlayıp
	kullanımını bir örnek ile gösterin.
	'yaricap' özelliği ve 'cevre' metodu olan Daire sınıfını tanımlayıp
	kullanımını bir örnek ile gösterin
*/
class Kare{
	var $kenar;
	function cevre(){
		return $this->kenar*4;
	}
}
class Daire{
	var $yaricap;
	function cevre(){
		return 2 * M_PI * $this->yaricap;
	}
}

$k1 = new Kare();
$d1 = new Daire();
$k1->kenar = 3;
$d1->yaricap = 5;

echo $k1->cevre().'<br>';
echo $d1->cevre().'<br>';