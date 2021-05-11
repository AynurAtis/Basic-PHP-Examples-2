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
class Cizgi2D {
	public $x1;
	public $y1;
	public $x2;
	public $y2;
	function __construct($x1, $y1, $x2, $y2){
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
	}
	public function uzunluk(){
		return sqrt(
			pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)
		);
	}
	public function __toString(){
		return sprintf('Başlangıç: %d, %d<br>Bitiş: %d, %d<br>Uzunluk: %.2f',
			$this->x1, $this->y1, $this->x2, $this->y2, $this->uzunluk());
	}
}
$a = new Cizgi2D(10, 20, 3, 4);
echo $a;