<?php
/*
	'ornek59.html' formundan 'POST' ile gelen bilgileri alt alta görüntüleyen program
*/
$ad = $_POST['ad'];
$ort = ($_POST['vize'] + $_POST['final']) / 2;
printf('Adı: %s<br>Vize: %d<br>Final: %d<br>Ortalama: %.1f',
	$ad, $_POST['vize'], $_POST['final'], $ort);
