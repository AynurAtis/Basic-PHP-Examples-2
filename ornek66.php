<?php
/*
	Formlarda dizi tipinde alanların kullanımı.
	Kullanıcı tercihlerini onay kutuları (checkbox) ile isteyen bir form ve bu formu işleyen php programının birleştirilmesi.
	Form submit edilse de edilmese de form görüntülenecek.
*/
if($_POST['kaydet']){
	print '<pre>';
	print_r($_POST);
}
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	Hobileriniz:<br>
	<input type="checkbox" name="hobi[]" value="spor"> Spor
	<input type="checkbox" name="hobi[]" value="yemek"> Yemek
	<input type="checkbox" name="hobi[]" value="muzik"> Müzik<br>

	Bildiğiniz programlama dilleri:<br>
	<input type="checkbox" name="dil[]" value="php"> PHP
	<input type="checkbox" name="dil[]" value="cs"> C#
	<input type="checkbox" name="dil[]" value="js"> Javascript<br>

	<input type="submit" name="kaydet" value="Kaydet">
</form>';
