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
	function cevre(){
		return ($this->kenar1 + $this->kenar2) * 2;
	}
	function alan(){
		return ($this->kenar1 * $this->kenar2);
	}
}

$d = new Dikdortgen();
$d->kenar1 = 3;
$d->kenar2 = 5;
printf('Kenar1=%d, kenar2=%d olan dikdörtgenin<br>Çevresi=%d<br>Alanı=%d',
	$d->kenar1, $d->kenar2, $d->cevre(), $d->alan());