<?php
/*
	Kendisine parametre olarak verilen iki sayıdan büyüğünü döndüren
	bir fonksiyon yazıp kullanımını bir örnek ile gösterin
*/
function buyuk($a, $b){
	if($a>$b) return $a;
	return $b;
}
// fonksiyonun kullanımı
echo buyuk(3, 5);