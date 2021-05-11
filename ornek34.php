<?php
/*
	Kordinatları x ve y olan noktanın merkeze olan uzaklığı
*/
class Nokta2D {
	public $x;
	public $y;
	function __construct($x, $y){
		$this->x = $x;
		$this->y = $y;
	}
	function uzaklik(){
		return sqrt($this->x * $this->x + $this->y * $this->y);
	}
}
$a = new Nokta2D(3, 4);
printf('Koordinatı (%d, %d) olan noktanın merkeze uzaklığı = %.2f<br>', 
	$a->x, $a->y, $a->uzaklik());
