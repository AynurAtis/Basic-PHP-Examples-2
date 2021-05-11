<?php
/*
	
*/
$xml = simplexml_load_file('ornek100.xml');
print $xml->ogrenci[0]['no'].'<br>';
print $xml->ogrenci[0]->adi.'<br>';
print $xml->ogrenci[0]->vize.'<br>';
print $xml->ogrenci[0]->final.'<br>';

print $xml->ogrenci[1]['no'].'<br>';
print $xml->ogrenci[1]->adi.'<br>';
print $xml->ogrenci[1]->vize.'<br>';
print $xml->ogrenci[1]->final.'<br>';

print $xml->ogrenci[2]['no'].'<br>';
print $xml->ogrenci[2]->adi.'<br>';
print $xml->ogrenci[2]->vize.'<br>';
print $xml->ogrenci[2]->final.'<br>';