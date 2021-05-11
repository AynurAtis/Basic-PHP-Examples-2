<?php
/*
	
*/
$xml = simplexml_load_string("<?xml version='1.0' encoding='UTF-8'?>
<posta>
    <kime>sen@sitem.com</kime>
    <kimden>ben@sitem.com</kimden>
    <konu>Hatırlatma</konu>
    <mesaj>XML çok kolaymış!</mesaj>
</posta>");
print $xml->kimden.'<br>';
print $xml->kime.'<br>';
print $xml->konu.'<br>';
print $xml->mesaj.'<br>';