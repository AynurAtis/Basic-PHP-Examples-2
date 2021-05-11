<?php
/*
	İstisna (exception) oluşturma
*/
class EBaglanti extends Exception {}
class EYetki extends Exception {}
class EDbGenel extends Exception {}

function baglan($host, $user, $pass){
	if($user == '')
		throw new EYetki();
	if(!mysql_connect($host, $user, $pass))
		throw new EBaglanti();
}

$a = -5;
try{
	baglan('localhost', '', '');
	echo 'Bağlantı başarılı';
} catch(EYetki $e){
	echo 'Lütfen geçerli kullanıcı adı ve şifre girin';
} catch(EBaglanti $e){
	echo 'Lütfen sunucu ayarlarını kontrol edin';
} catch(Exception $e){
	echo 'Bilinmeyen veritabanı hatası: '.$e->getMessage();
}
