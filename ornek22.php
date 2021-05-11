<?php
/*
	Aşağıdaki özelliklere sahip bir Daire sınıfı tanımlayıp
	kullanımını bir örnek ile gösterin:
	- 'Yarıçap' özelliği olacak ve bu değer nesne oluşturulurken verilmek zorunda
	- 'Çevre' ve 'Alan' metodları hesaplayıp sonucu döndürecek
	- Nesne metin olarak yazdırılmak istendiğinde tüm özelliklerini alt alta listeleyecek (__toString)
*/
class Daire {
	var $yaricap;
	function __construct($r){
		$this->yaricap = $r;
	}
	function cevre(){
		return 2 * M_PI * $this->yaricap;
	}
	function alan(){
		return M_PI * $this->yaricap * $this->yaricap;
	}
	function __toString(){
		return sprintf('Yarıçapı %d olan dairenin<br>Çevresi=%.1f<br>Alanı=%.1f',
			$this->yaricap, $this->cevre(), $this->alan());
	}
}

$d = new Daire(5);
echo $d;
