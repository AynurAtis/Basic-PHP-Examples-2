<?php
/*
	
*/
$xml = simplexml_load_file('ornek100.xml');
foreach($xml->ogrenci as $ogr){
	print $ogr['no'].'<br>';
	print $ogr->adi.'<br>';
	print $ogr->vize.'<br>';
	print $ogr->final.'<br>';
}
