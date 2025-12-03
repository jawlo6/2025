============================================================

<?php
$wyrazenie = "/\d+/";
$tekst = "abc123";


if (preg_match($wyrazenie, $tekst))
    echo("Znaleziono podany wzorzec.");
else
    echo("Nie znaleziono podanego wzorca.");
?>
