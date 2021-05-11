<?php
/*
	Kendisinden kaç adet nesne türetildiğini sayan bir sınıf yazıp
	kullanımını bir örnek ile gösterin.
	Bu sınıf aynı zamanda nesneler yok edildiğinde de sayacı değiştirmeli.
*/
class TEST {
	public static $sayac = 0;
	function __construct(){
		self::$sayac++;
	}
	function __destruct(){
		self::$sayac--;
	}
}
$a = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);
unset($a);

$b = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);

$c = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);
