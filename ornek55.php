<pre><?php
/*
	Kendisine parametre olarak verilen kaynak dosyayı hedefe taşıyan bir fonksiyon
	yazıp kullanımını bir örnek ile gösterin.
	- Hedef dizin yoksa oluşturulsun.
	- Hata kontrolü yapılsın
*/
function tasi($kaynak, $hedef){
	if(!file_exists($kaynak))
		die("$kaynak dosyası mevcut değil!");
	if(file_exists($hedef))
		die("$hedef dosyası zaten mevcut!");
	if(!file_exists(dirname($hedef)))
		mkdir(dirname($hedef), 0777, true);
	if(!rename($kaynak, $hedef))
		die('Dosya taşıma hatası!');
	return true;
}

$a = 'test.txt';
$b = 'alt/alta/dizin/test2.txt';
if(!tasi($a, $b))
	die('HATA');
else printf('"%s" dosyası "%s" olarak taşındı', $a, $b);