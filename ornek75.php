<html>
<body>
<?php
/*
	'mysql_fetch_object' ile sorgu sonucunu "kullanıcı tanımlı nesne" olarak almak
*/
$baglanti = mysql_connect('localhost', 'gakmyo', '');
if(!$baglanti) 
	die('Sunucu bağlantı hatası: '.mysql_error());
if(!mysql_select_db('test', $baglanti))
	die('DB seçme hatası: '.mysql_error());
mysql_query("SET NAMES 'utf8'");
$sonuc = mysql_query('select * from ogrenciler');
if(!$sonuc)
	die('Sorgu hatası: '.mysql_error());

while($kayit = mysql_fetch_object($sonuc, 'Ogrenci')){
	echo 'No: '.$kayit->no.'<br>';
	echo 'Ad :'.$kayit->adi.'<br>';
	echo 'Vize :'.$kayit->vize.'<br>';
	echo 'Final :'.$kayit->final.'<br>';
	echo 'Ortalama :'.$kayit->ortalama().'<hr>';
}
mysql_close($baglanti);

class Ogrenci {
	function ortalama(){
		return ($this->vize + $this->final) / 2;
	}
}