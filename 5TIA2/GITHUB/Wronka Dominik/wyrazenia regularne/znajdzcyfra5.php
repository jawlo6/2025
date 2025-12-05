<p>Wyszukiwanie liczby 5-cio cyfrowej</p>
<?php
$wzorzec = '/\d{5}/';
$tekst = "numer telefonu 562456814";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono cyfre";
else
    echo "Nie znaleziona cyfry";
?>
