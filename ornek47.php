<?php
/*
	implode fonksiyonu ile bir diziden HTML liste oluşturma
*/
$dizi = array('Gemlik', 'Asım', 'Kocabıyık', 'Meslek', 'Yüksekokulu');
$s = implode('</li><li>', $dizi);
echo '<ul><li>'.$s.'</li></ul>';