<?php

/*   
			Kendisine parametre olarak verilen vize ve final notuna göre ortalama hesaplayıp döndüren bir fonksiyon yazınız.
			Fonksiyona parametre olarak 0-100 arası olmayan bir not verildiğinde exception sınıfından istisna oluştursun.
			try-cath kullanın.
*/
	function ortalama($a,$b) {
	if(($a<0 || $a>100) || ($b<0 || $b>100))
	
		throw new Exception ('Girilen sayilar 0-100 arasinda olmali');
		
		return ($a+$b)/2;
	
}
$a=-10;
$b=80;
	try
	{
		printf('Vizesi %d ve Finali %d olan kisinin ortalamasi = %d<br>', $a,$b,ortalama($a,$b));
		echo 'Kod basariyla calisti. <br>';
	}
	catch (Exception $e) 
	{	
		echo 'Hata : ' . $e->getMessage();
    }