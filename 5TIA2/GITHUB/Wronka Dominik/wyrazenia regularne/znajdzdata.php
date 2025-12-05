<p>Wyszukiwanie daty</p>
<?php
$wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst = "Sucha Beskidzka, dn 04.08.2024";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono date ";
else
    echo "Nie znaleziono daty";
?>
