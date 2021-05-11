<html>
<head><style>
table {
	border-collapse:collapse;
}
table, td, th {
	border:1px solid #aaa;
	}
</style></head>
<body>
<?php
/*
	'urunler' tablosundaki kayıtları HTML tablo olarak görüntüleme
*/
$baglanti = mysql_connect('localhost', 'gakmyo', '');
if(!$baglanti) 
	die('Sunucu bağlantı hatası: '.mysql_error());
if(!mysql_select_db('test', $baglanti))
	die('DB seçme hatası: '.mysql_error());
mysql_set_charset('utf8');
$sonuc = mysql_query('select * from urunler');
if(!$sonuc)
	die('Sorgu hatası: '.mysql_error());
echo '<table border="1"><tr><th>ID</th><th>Tur Adı</th><th>Fiyat</th><th>Açıklama</th><th>Resim</th></tr>';
while($kayit = mysql_fetch_assoc($sonuc)){
	printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><img src="resim/%s" height="150"></td></tr>', 
		$kayit['id'], $kayit['adi'], $kayit['fiyat'], $kayit['aciklama'], $kayit['resim']);
}
echo '</table>';
mysql_close($baglanti);