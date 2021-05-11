<?php
/*
	Aşağıdaki özelliklerde 'Çokgen' sınıfı tanımlayıp kullanımını bir
	örnek ile gösterin:
	- Belirsiz sayıda noktadan oluşacak
	- Her bir nokta 'Nokta2D' sınıfından olacak
	- Noktaların değeri çokgen nesnesi oluşturulurken verilmeli (sayısı belli değil)
	  (Nesne oluşturulurken verilen değer sayısının yarısı kadar nokta var demektir.
	  Çünkü her nokta x ve y diye iki değerden oluşur.
	  Örneğin: 6 değer verilirse üçgen demektir)
	- 'Çevre' isimli metodu çokgenin çevresini hesaplayıp döndürecek
	  (çevre bütün çizgi uzunluklarının toplamıdır)
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
class Cokgen {
	public $P = array();
	function __construct(){
		$n = func_num_args();
		if($n < 6)
			throw new Exception('En az 6 parametre (üçgen için) olmalı');
		$prm = func_get_args();
		for($i=0; $i<$n; $i+=2){
			$this->P[] = new Nokta2D($prm[$i], $prm[$i+1]);
		}
	}
	public function uzunluk($p1, $p2){
		return sqrt(
			pow($p2->x - $p1->x, 2) + pow($p2->y - $p1->y, 2)
		);
	}
	public function cevre(){
		$n = count($this->P);
		$c = 0;
		for($i=0; $i<$n-1; $i++){
			$c += $this->uzunluk($this->P[$i], $this->P[$i+1]);
		}
		$c += $this->uzunluk($this->P[$n-1], $this->P[0]);
		return $c;
	}
		public function __toString(){
		$n = count($this->P);
		$s = sprintf('Şekil bir %d kenarlıdır<br>', $n);
		for($i=0; $i<$n; $i++){
			$s .= sprintf('%d. nokta: (%d, %d)<br>', $i+1, $this->P[$i]->x, $this->P[$i]->y);
		}
		$s .= sprintf('Çevre = %.2f<br>', $this->cevre());
		return $s;
	}
}
$a = new Cokgen(
	0, 0
	, 10, 0
	, 10, 10
	, 0, 10
	, 5, 5
	);
echo $a;