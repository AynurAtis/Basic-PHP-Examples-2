<pre><?php
/*
	explode fonksiyonu ile bir cümleyi boşluklardan parçalara
	ayırarak kelimeleri dizi halinde almak
*/
$a = 'Gemlik Asım Kocabıyık Meslek Yüksekokulu';
$dizi = explode(' ', $a);
print_r($dizi);