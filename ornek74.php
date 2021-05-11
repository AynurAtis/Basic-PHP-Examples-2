<html>
<body>
<?php
/*
	'ogrenciler' tablosuna yeni kayıt ekleme
*/
$baglanti = mysql_connect('localhost', 'gakmyo', '');
if(!$baglanti) 
	die('Sunucu bağlantı hatası: '.mysql_error());
if(!mysql_select_db('test', $baglanti))
	die('DB seçme hatası: '.mysql_error());
mysql_set_charset('utf8');
$sonuc = mysql_query('insert into ogrenciler values(12345, "Ali AK", 77, 88)');
if(!$sonuc)
	echo('Sorgu hatası: <br>'.mysql_error(). '<br>');

$sonuc = mysql_query('select * from ogrenciler order by no');
if(!$sonuc)
	die('Sorgu hatası: '.mysql_error());
echo '<table border="1"><tr><th>No</th><th>Adı</th><th>Vize</th><th>Final</th></tr>';
while($kayit = mysql_fetch_assoc($sonuc)){
	printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', 
		$kayit['no'], $kayit['adi'], $kayit['vize'], $kayit['final']);
}
echo '</table>';
mysql_close($baglanti);