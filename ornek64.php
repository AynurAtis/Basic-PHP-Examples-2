<?php
/*
	Bir HTML form ile formu işleyen php programının birleştirilmesi.
	Eğer form submit edilmişse gelen bilgiler görüntülenecek.
	Form submit edilse de edilmese de form görüntülenecek.
	Eğer submit edilmiş form ise, formun alanları gelen bilgileri gösterecek.
*/
if($_POST['vize']){
	$ad = $_POST['ad'];
	$ort = ($_POST['vize'] + $_POST['final']) / 2;
	printf('Adı: %s<br>Vize: %d<br>Final: %d<br>Ortalama: %.1f<br><hr>',
		$ad, $_POST['vize'], $_POST['final'], $ort);
}
echo '<form action="ornek64.php" method="post">
	Ad Soyad: <input name="ad" value="'.$_POST['ad'].'"><br>
	Vize : <input name="vize" value="'.$_POST['vize'].'"><br>
	Final : <input name="final" value="'.$_POST['final'].'"><br>
	<input type="submit" value="Hesapla">
</form>';

echo '<h5>'.date('c').'</h5>';