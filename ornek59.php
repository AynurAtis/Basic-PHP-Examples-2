<?php
/*
	'ornek59.html' formundan 'GET' ile gelen bilgileri alt alta görüntüleyen program
*/
$ad = $_GET['ad'];
$ort = ($_GET['vize'] + $_GET['final']) / 2;
printf('Adı: %s<br>Vize: %d<br>Final: %d<br>Ortalama: %.1f',
	$ad, $_GET['vize'], $_GET['final'], $ort);
