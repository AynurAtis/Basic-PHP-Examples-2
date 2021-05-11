<html>
<body>
<?php
/*
	'ogrenciler' tablosundaki kayıtları HTML tablo olarak görüntüleme
*/
$baglanti = mysql_connect('localhost', 'gakmyo', '');
if(!$baglanti) 
	die('Sunucu bağlantı hatası: '.mysql_error());
else echo 'Bağlantı başarılı<br>';
if(!mysql_select_db('test', $baglanti))
	die('DB seçme hatası: '.mysql_error());
else echo 'DB seçildi<br>';
mysql_set_charset('utf8');
$sonuc = mysql_query('select * from ogrenciler');
if(!$sonuc)
	die('Sorgu hatası: '.mysql_error());
else echo 'Sorgu başarılı<br>';
echo '<table border="1"><tr><th>No</th><th>Adı</th><th>Vize</th><th>Final</th></tr>';
while($kayit = mysql_fetch_assoc($sonuc)){
	printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', 
		$kayit['no'], $kayit['adi'], $kayit['vize'], $kayit['final']);
}
echo '</table>';
mysql_close($baglanti);