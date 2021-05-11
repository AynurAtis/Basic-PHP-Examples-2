<?php
/*
	'global' anahtar kelimesinin kullanımı
*/

$a = 'PHP';
function yazdir(){
	global $a;
	print '*'.$a.'*';
	$a = 'GAKMYO';
}
yazdir();
echo $a;