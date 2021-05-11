<?php
/*
	setcookie() ile çerez oluşturma ve $_COOKIE ile çerezin değerini okuyarak sayaç oluşturma
*/
if(isset($_COOKIE['sayac'])){
	setcookie('sayac', $_COOKIE['sayac'] + 1, time() + 600);
}
else setcookie('sayac', 1, time() + 600);

echo $_COOKIE['sayac'].'. kez Hoşgeldiniz ';
