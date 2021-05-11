<?php
/*
	Aşağıdaki özelliklere sahip 'Dikdortgen' sınıfını tanımlayıp
	kullanımını bir örnek ile gösterin:
	- kenar1 ve kenar2 özellikleri olacak
	- cevre ve alan metodları olacak
*/
class Dikdortgen {
	var $kenar1;
	var $kenar2;
	public function Dikdortgen($kenar1, $kenar2){
		$this->kenar1 = $kenar1;
		$this->kenar2 = $kenar2;
	}
	public function cevre(){
		return ($this->kenar1 + $this->kenar2) * 2;
	}
	public function alan(){
		return ($this->kenar1 * $this->kenar2);
	}
}

$d = new Dikdortgen(3, 5);

printf('Kenar1=%d, kenar2=%d olan dikdörtgenin<br>Çevresi=%d<br>Alanı=%d',
	$d->kenar1, $d->kenar2, $d->cevre(), $d->alan());

echo '<pre>';
var_dump($d);
print_r($d);