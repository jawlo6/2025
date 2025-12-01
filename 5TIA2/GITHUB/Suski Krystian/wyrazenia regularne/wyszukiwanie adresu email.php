<?php //wyszukiwanie adresu email
$wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst = "email: john@poczta.eu";
if(preg_match ($wzorzec, $tekst))
echo "znalezono email";
else
echo"nie znaloziono email";
