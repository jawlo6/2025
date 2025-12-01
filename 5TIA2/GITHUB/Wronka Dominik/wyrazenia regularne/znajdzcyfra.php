<p>Wyszukiwanie cyfry</p>
<?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono cyfre";
else
    echo "Nie znaleziona cyfry";
?>
