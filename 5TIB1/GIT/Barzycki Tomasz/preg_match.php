<?php

// Wyszukiwanie wzorca w tekście

// konstrukcja wyrażenia regularnego
$wyrazenie = '/być/';
$tekst = "być albo nie być";
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