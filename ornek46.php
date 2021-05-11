<pre><?php
/*
	implode fonksiyonu ile bir diziden HTML tablo oluşturma
*/
$dizi = array('Gemlik', 'Asım', 'Kocabıyık', 'Meslek', 'Yüksekokulu');
$s = implode('</td><td>', $dizi);
echo '<table border="1"><tr><td>'.$s.'</td></tr></table>';