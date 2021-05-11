<?php
/*
	Kendisine parametre olarak verilen ilk sayının, ikinci parametre ile verilen
	kuvvetini döndüren bir fonksiyon yazıp kullanımını bir örnek ile gösterin
*/
function kuvvet($x, $y){
	$sonuc = 1;
	for($i=1; $i<=$y; $i++)
		$sonuc *= $x;   // $sonuc=$sonuc*$x;
	return $sonuc;
}
// fonksiyonun kullanımı
echo kuvvet(5, 3);