<?php

// Wyszukanie dokładnie 5 cyfr

// szukamy pięciu cyfr
$wyrazenie = '/^\d\d\d\d\d$/';
$tekst = "telefon: 342003432";

// preg_match() sprawdza występowanie wyrażenia w ciągu
if( preg_match($wyrazenie, $tekst) )
{
    echo("Znaleziono podany wzorzec.");
}
else
{
    echo("Nie znaleziono podanego wzorca.");
}

?>