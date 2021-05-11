<html>
<body>
<pre>
<?php
/*
	Hata kontrolü ile mysql veritabanına bağlantı yapmak.
	Sorgu çalıştırma ve sonucu 'mysql_fetch_assoc' ile almak
*/
$baglanti = mysql_connect('localhost', 'gakmyo', '');
if(!$baglanti) 
	die('Sunucu bağlantı hatası: '.mysql_error());
else echo 'Bağlantı başarılı<br>';
if(!mysql_select_db('test', $baglanti))
	die('DB seçme hatası: '.mysql_error());
else echo 'DB seçildi<br>';
mysql_query("SET NAMES 'utf8'");
$sonuc = mysql_query('select * from ogrenciler');
if(!$sonuc)
	die('Sorgu hatası: '.mysql_error());
else echo 'Sorgu başarılı<br>';

while($kayit = mysql_fetch_assoc($sonuc)){
	print_r($kayit);
}
mysql_close($baglanti);