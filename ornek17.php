<?php
/*
	'kenar' özelliği, 'cevre' ve 'alan' metodu olan Kare sınıfını tanımlayıp
	kullanımını bir örnek ile gösterin.
*/
class Kare{
	var $kenar;
	function cevre(){
		return $this->kenar*4;
	}
	function alan(){
		return $this->kenar * $this->kenar;
	}
}

$k1 = new Kare();
$k2 = new Kare();
$k1->kenar = 3;
$k2->kenar = 5;
echo $k1->alan().'<br>';
echo $k1->cevre().'<br>';
echo $k2->cevre().'<br>';