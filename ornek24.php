<?php
/*
	'Ogrenci' isminde aşağıdaki özelliklere sahip bir sınıf tanımlayıp
	kullanımını bir örnek ile gösterin:
	- 'ad, vize, final' isimlerinde üç adet özelliği olacak
	- Özelliklerin ilk değeri nesne oluşturulurken verilmek zorunda. Ad zorunlu,
		vize ve final verilmezse sıfır alınacak.
	- 'Ortalama' isimli metodu ortalamayı hesaplayıp döndürmeli
	- Nesneler string olarak kullanıldığında bütün özelliklerini alt alta listelemeli
*/
class Ogrenci {
	var $ad;
	var $vize;
	var $final;
	function __construct($ad, $v=0, $f=0){
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
			'Ortalama : '.$this->Ortalama().'<br>';
	}
}

$ogr1 = new Ogrenci('Ali AK');
$ogr2 = new Ogrenci('Fatma ŞEN', 85);
$ogr3 = new Ogrenci('Veli BAL', 90, 50);
echo $ogr1;
echo $ogr2;
echo $ogr3;