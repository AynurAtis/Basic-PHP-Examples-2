<pre><?php
/*
	
*/
$dosya = './webterimleri.txt';
echo $dosya.'<br>';
$handle = fopen($dosya, 'r');
while($data = fread($handle, 100)){
	echo $data;
}
fclose($handle);