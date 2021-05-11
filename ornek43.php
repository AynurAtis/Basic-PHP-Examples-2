
<pre><?php
/*
	natcasesort ile dizileri büyük-küçük harf
	ayrımı yapmadan doğal sıralama (natural sort) ile
	alfabetik sıralama
*/
$dizi = array("resim 1", "resim 2", "Resim 10", "resim 3");
natcasesort($dizi);
print_r($dizi);