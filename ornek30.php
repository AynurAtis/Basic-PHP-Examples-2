<?php
/*
	'protected' özellikler
*/
class Daire {
	protected $yaricap;
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
class YeniDaire extends Daire{
	public function test(){
		return $this->yaricap;
	}
}
$d = new YeniDaire(10, 3.14);
print $d->test().'<br>';
