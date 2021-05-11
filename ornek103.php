<?php
/*
	
*/
$xml = simplexml_load_string("<?xml version='1.0' encoding='UTF-8'?><posta></posta>");
$xml->addChild('kime', 'ali@ak.com');
$xml->addChild('kimden', 'veli@bal.com');
$xml->addChild('konu', 'Programlama');
$xml->addChild('mesaj', 'Programlama çok kolay');
header('Content-type: text/xml');
echo $xml->asXML();