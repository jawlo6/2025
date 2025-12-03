============================================================

<?php
// wyszukiwanie adresu www

$wzorzec = '/(https?:\/\/[^\s]+|www\.[^\s]+)/i';
$tekst = "strona: https://www.przyklad.pl";

if (preg_match($wzorzec, $tekst))
    echo "znaleziono adres www";
else
    echo "nie znaleziono adresu www";
?>
