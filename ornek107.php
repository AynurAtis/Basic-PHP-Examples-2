<?php

if(isset($_COOKIE['adet'])) {
	setcookie('adet', $_COOKIE['adet']+2, time()+60);
}
else setcookie('adet', 0 , time()+60);

echo $_COOKIE['adet'];