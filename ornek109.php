<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

$xml = simplexml_load_string("<?xml version='1.0' encoding='UTF-8'?><posta></posta>");
$kime = $xml->addChild('kime');
$kime->addChild('eposta', 'ali@ak.com');
$kime->addChild('eposta', 'ayşe@ak.com');
$kime->addChild('eposta', 'fatma@ak.com');
$xml->addChild('kimden', 'veli@bal.com');
$xml->addChild('konu', 'Programlama');
$xml->addChild('mesaj', 'Programlama çok kolay');
header('Content-type: text/xml');
echo $xml->asXML();