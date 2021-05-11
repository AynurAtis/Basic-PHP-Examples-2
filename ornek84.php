<?php
/*
	İstisna (exception) oluşturma
*/
function cevre($r){
	if(!is_numeric($r))
		throw new InvalidArgumentException('Yarıçap sayısal olmalı');
	if($r <= 0)
		throw new Exception('Yarıçap sıfırdan büyük olmalı');
	return 2 * M_PI * $r;
}

$a = "aynur";
try{
	echo 'Hesaplama yapılacak<br>';
	printf('Yarıçapı %d olan dairenin çevresi = %.1f', $a, cevre($a));
	echo '<br>Kod başarıyla çalıştı';
} catch(InvalidArgumentException $e){
	echo $e->getMessage();
} catch(Exception $e){
	echo 'Hata: '.$e->getMessage();
}