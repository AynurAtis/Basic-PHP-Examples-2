<?php
/*
	Aşağıdaki özelliklerde 'Çizgi2D' sınıfı tanımlayıp kullanımını bir
	örnek ile gösterin:
	- x1, y1 isimli özellikleri olacak (başlangıç noktası)
	- x2, y2 isimli özellikleri olacak (bitiş noktası)
	- Tüm özellikler nesne oluşturulurken verilmek zorunda
	- 'Uzunluk' isimli metodu çizginin uzunluğunu hesaplayıp döndürecek
	- Nesne string olarak yazdırılırsa bütün özellikleri alt alta listelemeli
*/
class Nokta2D {
	public $x;
	public $y;
	function __construct($x, $y){
		$this->x = $x;
		$this->y = $y;
	}
}
class Cizgi2D {
	public $P1;
	public $P2;
	function __construct($x1, $y1, $x2, $y2){
		$this->P1 = new Nokta2D($x1, $y1);
		$this->P2 = new Nokta2D($x2, $y2);
	}
	public function uzunluk(){
		return sqrt(
			pow($this->P2->x - $this->P1->x, 2) + pow($this->P2->y - $this->P1->y, 2)
		);
	}
	public function __toString(){
		return sprintf('Başlangıç: %d, %d<br>Bitiş: %d, %d<br>Uzunluk: %.2f',
			$this->P1->x, $this->P1->y, $this->P2->x, $this->P2->y, $this->uzunluk());
	}
}
$a = new Cizgi2D(10, 20, 3, 4);
echo $a;