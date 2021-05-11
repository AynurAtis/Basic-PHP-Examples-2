<?php
/*
	Kendisine parametre olarak verilen ortalama ve baraj notuna göre 
	'Geçer' veya 'Kalır' döndüren bir fonksiyon yazıp kullanımını bir örnek ile gösterin.
	Barajın varsayılan değeri 50 olacak.
*/
function sonuc($not, $baraj=50){
	if($not >= $baraj) return 'Geçer';
	else return 'Kalır';
}
// Fonksiyonun kullanımını
echo sonuc(45).'<br>';
echo sonuc(45, 40).'<br>';
