<?php
/*
	'public' özellikler
*/
class Daire {
	public $yaricap;
	public $PI = M_PI;
	function __construct($r){
		$this->yaricap = $r;
	}
	public function cevre(){
		return 2 * $this->PI * $this->yaricap;
	}
	public function alan(){
		return $this->PI * $this->yaricap * $this->yaricap;
	}
}
$d = new Daire(10);
$d->PI = 3;
printf('Yarıçapı %d olan dairenin<br>Çevresi=%.1f<br>Alanı=%.1f',
	$d->yaricap, $d->cevre(), $d->alan());
