<?php
/*
	Kendisinden kaç adet nesne türetildiğini sayan bir sınıf yazıp
	kullanımını bir örnek ile gösterin.
*/
class TEST {
	public static $sayac = 0;
	function __construct(){
		self::$sayac++;
	}
}
$a = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);

$b = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);

$c = new TEST();
printf('%d adet nesne oluşturuldu<br>', TEST::$sayac);
