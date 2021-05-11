<pre><?php
/*
	pathinfo() ile dosya hakkında bilgi almak
*/
// $yol = 'D:/www_root/www/ortak/ornek10.php';
$yol = __FILE__;
$i = pathinfo($yol);
if(is_dir($yol))
	echo 'Klasör<br>';
else echo 'Dosya<br>';
print_r($i);