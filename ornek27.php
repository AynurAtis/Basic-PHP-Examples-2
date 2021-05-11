<?php
/*
	'__get', '__set' ve '__call' msihirli metodları (magic methods):
	Aşağıdaki özelliklerde 'Daire' isimli bir sınıf tanımlayıp
	kullanımını bir örnek ile gösterin:
	- 'Yarıçap' isimli özelliği olacak ve bu özellik nesne oluşturulurken verilecek
	- 'Cevre' metodu çevresini hesaplayıp döndürecek
	- 'Alan' metodu alanını hesaplayıp döndürecek
	- Var olmayan 'Çap' özelliği okunursa (__get) yarıçapın iki katını döndürecek
	- Var olmayan 'Çap' özelliği değiştirilirse (__set) yarıçap bunun yarısı olacak
	- Var olmayan bir metod çağırılırsa hata mesajı verecek
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
	function __get($ozellik){
		if($ozellik == 'cap'){
			return $this->yaricap * 2;
		}
		else printf('<br><b>%s</b> isimli özellik mevcut değil!<br>', $ozellik);
	}
	function __set($ozellik, $deger){
		if($ozellik == 'cap'){
			$this->yaricap = $deger / 2;
		}
		else printf('<br><b>%s</b> isimli özellik mevcut değil!<br>', $ozellik);
	}
	function __call($metod, $param){
		printf('<br><b>%s</b> isimli metod mevcut değil!<br>', $metod);
	}
}

$d = new Daire(10);
$d->cap = 6;
printf('Yarıçapı %d olan dairenin<br>Çevresi=%.1f<br>Alanı=%.1f<br>',
	$d->yaricap, $d->cevre(), $d->alan());
print $d->yaricap;
print $d->hacim();