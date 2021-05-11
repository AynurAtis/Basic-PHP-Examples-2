<pre>
<?php
$dizi = array(
	array('a', 'b', 'c'),
	array('x', 'y', 'z')
);
print_r($dizi);
print 'COUNT_NORMAL ile:'.count($dizi).'<br>';
print 'COUNT_RECURSIVE ile:'.count($dizi,COUNT_RECURSIVE).'<br>';