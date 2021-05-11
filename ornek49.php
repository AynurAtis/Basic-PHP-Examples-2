<pre><?php
/*
	pathinfo() ile dosya hakkında bilgi almak
*/
// $yol = 'D:/www_root/www/ortak/ornek10.php';
$yol = __FILE__;
echo $yol.'<br>';
echo basename($yol).'<br>';
echo dirname($yol).'<br>';