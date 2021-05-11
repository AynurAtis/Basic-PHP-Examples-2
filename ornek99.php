<?php
/*
	
*/
$xml = simplexml_load_file('ornek99.xml');
print $xml->no.'<br>';
print $xml->adi.'<br>';
print $xml->vize['ders'].' '.$xml->vize.'<br>';
print $xml->final['ders'].' '.$xml->final.'<br>';