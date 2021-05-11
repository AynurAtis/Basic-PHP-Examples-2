<?php
/*
	'Ogrenci' isminde aşağıdaki özelliklere sahip bir sınıf tanımlayıp
	kullanımını bir örnek ile gösterin:
	- 'ad, vize, final' isimlerinde üç adet özelliği olacak
	- Özelliklerin ilk değeri nesne oluşturulurken verilmek zorunda.
	- 'Ortalama' isimli metodu ortalamayı hesaplayıp döndürmeli
	- Nesneler string olarak kullanıldığında bütün özelliklerini alt alta listelemeli
*/
class Ogrenci {
	var $ad;
	var $vize;
	var $final;
	function __construct($ad, $v, $f){
		$this->ad = $ad;
		$this->vize = $v;
		$this->final = $f;
	}
	function Ortalama(){
		return $this->vize * 0.4 + $this->final * 0.6;
	}
	function __toString(){
		return 'Ad : '.$this->ad.'<br>'.
			'Vize : '.$this->vize.'<br>'.
			'Final : '.$this->final.'<br>'.
			'Ortalama : '.$this->Ortalama();
	}
}

$ogr1 = new Ogrenci('Ali AK', 90, 50);
echo $ogr1;