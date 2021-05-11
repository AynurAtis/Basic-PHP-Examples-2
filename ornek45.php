<?php
/*
	implode fonksiyonu ile kelimelerden oluşan bir diziyi birleştirerek
	cümle haline getirme
*/
$dizi = array('Gemlik', 'Asım', 'Kocabıyık', 'Meslek', 'Yüksekokulu');
$s = implode(' ', $dizi);
echo $s;