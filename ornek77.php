<?php
function kare($a){
	return $a * $a;
}

$x = 5;
printf('%d<sup>2</sup>=%d', $x, kare($x));