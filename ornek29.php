<?php
/*
	'private' özellikler
*/
class Daire {
	public $yaricap;
	private $PI = M_PI;
	function __construct($r, $pi){
		$this->yaricap = $r;
		$this->PI = $pi;
	}
	public function cevre(){
		return 2 * $this->PI * $this->yaricap;
	}
	public function alan(){
		return $this->PI * $this->yaricap * $this->yaricap;
	}
}
$d = new Daire(10, 3.14);

printf('Yarıçapı %d olan dairenin<br>Çevresi=%.1f<br>Alanı=%.1f',
	$d->yaricap, $d->cevre(), $d->alan());
