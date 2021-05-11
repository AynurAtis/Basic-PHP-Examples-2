<pre><?php
/*
	sort ve asort ile dizi sıralamanın farkı
*/
$meyve = array("limon", "portakal", "muz", "elma");
sort($meyve);
echo '<h3>sort() ile</h3>';
print_r($meyve);

$meyve = array("limon", "portakal", "muz", "elma");
asort($meyve);
echo '<h3>asort() ile</h3>';
print_r($meyve);