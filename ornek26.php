<?php
/*
	Aşağıdaki özelliklerde 'EskenarUcgen' isimli bir sınıf tanımlayıp
	kullanımını bir örnek ile gösterin:
	- 'kenar' isimli özelliği olacak
	- Kenar özelliği nesne oluşturulurken verilecek
	- 'Cevre' metodu çevresini hesaplayıp döndürecek
	- 'Alan' metodu alanını hesaplayıp döndürecek
*/
class EskenarUcgen {
	var $kenar;
	function __construct($k){
		$this->kenar = $k;
	}
	function Cevre(){
		return 3 * $this->kenar;
	}
	function Yukseklik(){
		return $this->kenar * sqrt(3) / 2;
	}
	function Alan(){
		return $this->kenar * $this->Yukseklik() / 2;
	}
}
$u = new EskenarUcgen(5);
printf('Kenarı=%d olan eşkenar üçgenin<br>Yüksekliği=%.1f<br>Çevresi=%.1f<br>Alanı=%.1f<br>',
	$u->kenar, $u->Yukseklik(), $u->Cevre(), $u->Alan());