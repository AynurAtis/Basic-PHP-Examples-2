<?php
/*
	
*/
$xml = simplexml_load_file('ornek100.xml');
echo '<table border="1"><tr><th>No</th><th>Ad</th><th>Vize</th><th>Final</th></tr>';
foreach($xml->ogrenci as $ogr){
	printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', 
		$ogr['no'], $ogr->adi, $ogr->vize, $ogr->final);
}
echo '</table>';