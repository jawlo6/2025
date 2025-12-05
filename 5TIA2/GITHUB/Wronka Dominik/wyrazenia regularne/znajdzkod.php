<p>Wyszukiwanie kodu pocztowego</p>
<?php
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "poczta: 34-220 Sucha Beskidzka";
if (preg_match($wzorzec, $tekst, $matches))
    echo "Znaleziono kod pocztowy ".$matches[0];
else
    echo "Nie znaleziono kodu";
?>
