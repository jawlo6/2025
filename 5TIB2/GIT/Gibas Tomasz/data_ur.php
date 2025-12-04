<?php  

$rok = 2006;
$miesiac = 12;
$dzien  = 10;

$timestamp = mktime(0, 0, 0, $miesiac, $dzien, $rok);

$dzienTygodnia = date('l', $timestamp);

echo "Urodziłeś się w dniu: $dzienTygodnia";
?>
