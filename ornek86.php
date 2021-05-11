<?php
/*
	setcookie() ile çerez oluşturma ve $_COOKIE ile çerezin değerini okuma
*/
setcookie('ad', 'Ali', time() + 30);
echo 'Hoşgeldiniz '.$_COOKIE['ad'];

