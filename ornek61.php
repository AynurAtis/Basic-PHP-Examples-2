<!--
	Bir HTML form ile formu işleyen php programının birleştirilmesi
-->
<form action="ornek61.php" method="post">
	Ad Soyad: <input name="ad"><br>
	Vize : <input name="vize"><br>
	Final : <input name="final"><br>
	<input type="submit" value="Hesapla">
</form>
<?php
$ad = $_POST['ad'];
$ort = ($_POST['vize'] + $_POST['final']) / 2;
printf('Adı: %s<br>Vize: %d<br>Final: %d<br>Ortalama: %.1f',
	$ad, $_POST['vize'], $_POST['final'], $ort);
