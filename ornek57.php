<pre><?php
/*
	Kendisine parametre olarak verilen kaynak dosyayı hedefe taşıyan bir fonksiyon
	yazıp kullanımını bir örnek ile gösterin.
	- Hedef dizin yoksa oluşturulsun.
	- Hata kontrolü yapılsın
*/
$dir = 'resim';
$liste = scandir($dir);
print_r($liste);