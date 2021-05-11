<pre><?php
/*
	
*/
$dosya = './webterimleri.txt';
echo $dosya.'<br>';
$handle = fopen($dosya, 'a+');
fwrite($handle, "\r\nJSON = JavaScript Object Notation");
fclose($handle);