============================================================

<?php
// wyszukiwanie adresu email

$wzorzec = '/[-\w.]+@([-\w]+\.)+[A-z]/';
$tekst = "email: john@poczta.eu";

if (preg_match($wzorzec, $tekst))
    echo "znaleziono email";
else
    echo "nie znaleziono email";
?>
