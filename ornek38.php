<?php
/*
	$GLOBALS süper değişkeninin (super global) kullanımı
*/

$a = 'PHP';
function yazdir(){
	print '*'.$GLOBALS['a'].'*';
	$GLOBALS['a'] = 'GAKMYO';
}
yazdir();
echo $a;