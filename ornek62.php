<?php
/*
	Bir HTML form ile formu işleyen php programının birleştirilmesi.
	Eğer form submit edilmemişse gelen bilgiler görüntülenmeyecek.
	Submit edilmişse form görüntülenmeyecek.
*/
if($_POST['vize']){
	$ad = $_POST['ad'];
	$ort = ($_POST['vize'] + $_POST['final']) / 2;
	printf('Adı: %s<br>Vize: %d<br>Final: %d<br>Ortalama: %.1f<br>',
		$ad, $_POST['vize'], $_POST['final'], $ort);
}else {
	echo '<form action="ornek62.php" method="post">
		Ad Soyad: <input name="ad"><br>
		Vize : <input name="vize"><br>
		Final : <input name="final"><br>
		<input type="submit" value="Hesapla">
	</form>';
}
//echo '<h3>'.date('c').'</h3>';