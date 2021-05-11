<?php
/*
	İstisna (exception) oluşturma
*/
function cevre($r){
	if($r <= 0)
		throw new Exception('Yaricap sifirdan buyuk olmali');
	return 2 * M_PI * $r;
}

$a = 4;
try{
	echo 'Hesaplama yapilacak<br>';
	printf('Yarıçapı %d olan dairenin çevresi = %.1f', $a, cevre($a));
	echo '<br>Kod başarıyla çalıştı';
} catch(Exception $e){
	echo 'Hata: '.$e->getMessage();
}
