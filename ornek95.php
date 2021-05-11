<?php
/*
	
*/
$xml = simplexml_load_file('ornek94.xml');
print $xml->kimden.'<br>';
print $xml->kime.'<br>';
print $xml->konu.'<br>';
print $xml->mesaj.'<br>';
print $xml->aynur.'<br>';