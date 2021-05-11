<pre><?php
/*
	
*/
$data = file_get_contents('http://www.tcmb.gov.tr/kurlar/today.xml');
$xml = simplexml_load_string($data);
print_r($xml);