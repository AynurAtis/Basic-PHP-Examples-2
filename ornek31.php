<?php
/*
	STATIC özelliklerin kullanımı
*/
class TEST {
	public static $ozellik;
	function __construct($deger){
		self::$ozellik = $deger;
	}
	public function test(){
		return self::$ozellik;
	}
}
$a = new TEST(1);
$b = new TEST(2);
$c = new TEST(3);
$d=new TEST(4);
print $a->test().'<br>';
print $b->test().'<br>';
print $c->test().'<br>';
print TEST::$ozellik.'<br>';
