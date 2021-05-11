<?php
/*
	Kendisine parametre olarak verilen ilk sayının, ikinci parametre ile verilen
	kuvvetini döndüren bir fonksiyon yazıp kullanımını bir örnek ile gösterin.
	Kuvvetin varsayılan değeri 2 olacak.
*/
function kuvvet($x, $y=2){
	$sonuc = 1;
	for($i=1; $i<=$y; $i++)
		$sonuc *= $x;
	return $sonuc;
}
// fonksiyonun kullanımı
echo kuvvet(5, 3).'<br>';
echo kuvvet(5).'<br>';
