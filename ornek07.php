<pre>
<?php
$a = array('elma', 'yeşil', 'muz');
$b = array('kırmızı', 'yeşil', 'sarı');
$dizi = array_merge($a, $b);
print_r($dizi);
$dizi = array_replace($a, $b);
print_r($dizi);