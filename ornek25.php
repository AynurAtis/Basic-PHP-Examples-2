<?php
/*
	Sınıfılarda 'devralma (inheritance)', 'ebeveyn (parent)' ve 'çocuk (child)' sınıflar
*/
class A {
	var $ozellik = 'GENEL Özellik';
	var $fiyat = 99;
	function yazdir(){
		return $this->ozellik.'<br>';
	}
	function KDVliFiyat(){
		return $this->fiyat * 1.18;
	}
}
class B extends A {
	var $yeni = 'Yeni Özellik';
	function yazdir(){
		return $this->ozellik.'<br>'.
			$this->yeni.'<br>'.
			$this->fiyat.'<br>';
	}
}
$a = new A();
$b = new B();
$b->fiyat = 50;
echo $a->yazdir();
echo $b->yazdir();
echo $b->KDVliFiyat();
