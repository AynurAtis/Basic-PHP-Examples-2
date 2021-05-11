<pre><?php
/*
	Kendisine parametre olarak verilen kaynak dosyayı hedefe taşıyan bir fonksiyon
	yazıp kullanımını bir örnek ile gösterin.
	- Hedef dizin yoksa oluşturulsun.
	- Hata kontrolü yapılsın
*/
function tasi($kaynak, $hedef){
	if(!file_exists($kaynak))
		return 1;
	if(file_exists($hedef))
		return 2;
	if(!file_exists(dirname($hedef)))
		if(!mkdir(dirname($hedef), 0777, true))
			return 3;
	if(!rename($kaynak, $hedef))
		return 4;
	return 0;
}

$a = 'test.txt';
$b = 'alt/alta/dizin/test2.txt';
$sonuc = tasi($a, $b);
if($sonuc == 0) printf('"%s" dosyası "%s" olarak taşındı', $a, $b);
elseif($sonuc == 1) echo "$a dosyası mevcut değil!";
elseif($sonuc == 2) echo "$b dosyası zaten mevcut!";
elseif($sonuc == 3) echo dirname($b)." klasörü oluşturulurken hata var!";
elseif($sonuc == 4) echo "$a dosyası $b olarak taşınırken hata oluştu!";
else echo "$a dosyası $b olarak taşınırken bilinmeyen bir hata oluştu!";