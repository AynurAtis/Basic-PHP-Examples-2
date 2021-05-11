<?php
/*
	Kullanıcı tercihlerini onay kutuları (checkbox) ile isteyen bir form ve bu formu işleyen php programının birleştirilmesi.
	Form submit edilse de edilmese de form görüntülenecek.
*/
if($_POST['kaydet']){
	print '<pre>';
	print_r($_POST);
}
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	Hobileriniz:<br>
	<input type="checkbox" name="h1" value="spor"> Spor
	<input type="checkbox" name="h2" value="yemek"> Yemek
	<input type="checkbox" name="h3" value="muzik"> Müzik<br>

	Bildiğiniz programlama dilleri:<br>
	<input type="checkbox" name="d1" value="php"> PHP
	<input type="checkbox" name="d2" value="cs"> C#
	<input type="checkbox" name="d3" value="js"> Javascript<br>

	<input type="submit" name="kaydet" value="Kaydet">
</form>';
