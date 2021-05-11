<?php
/*
	setcookie() ile çerezin değerini değiştirme
*/
setcookie('ad', 'Fatma', time() + 60);
echo 'Hoşgeldiniz '.$_COOKIE['ad'];