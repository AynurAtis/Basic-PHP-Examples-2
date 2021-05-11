<?php
/*
	setcookie() ile çerezi silme
*/
setcookie('ad', 'Fatma', time() - 600);
echo 'Çerez silindi...';