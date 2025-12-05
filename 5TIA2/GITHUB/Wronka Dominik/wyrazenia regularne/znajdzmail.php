<p>Wyszukiwanie emaila</p>
<?php
$wzorzec = '/[\w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst = "email: john@poczta.pl";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono mail ";
else
    echo "Nie znaleziono maila";
?>
