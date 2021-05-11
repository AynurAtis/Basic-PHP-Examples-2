<?php
/*
	İstisna (exception) oluşturma
*/
function cevre($r){
	if($r <= 0)
		throw new Exception('Yarıçap sıfırdan büyük olmalı');
	return 2 * M_PI * $r;
}

$a = -4;
try{
	echo 'Hesaplama yapılacak<br>';
	printf('Yarıçapı %d olan dairenin çevresi = %.1f', $a, cevre($a));
	echo '<br>Kod başarıyla çalıştı';
} catch(Exception $e){
	echo 'Hata: '.$e->getMessage();
} finally {
	echo '<br>Program Bitti';
}
