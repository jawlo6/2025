============================================================

<?php
// Wzorzec wyszukujący dokładnie pięciu cyfr
$wyrazenie = "/\d{5}/";
$tekst = "telefon: 347208433";


if (preg_match($wyrazenie, $tekst))
    echo("Znaleziono podany wzorzec.");
else
    echo("Nie znaleziono podanego wzorca.");
?>
