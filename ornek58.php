<pre><?php
/*
	scandir() ile klasör içerisindeki dosya ve dizinlerin okunması
*/
$dir = 'resim';
$liste = scandir($dir);
foreach($liste as $dosya){
	if($dosya == '.' || $dosya == '..') continue;
	if(is_dir($dir.'/'.$dosya)) continue;
	printf('%s   :   %s<br>', $dosya, filesize($dir.'/'.$dosya));
}