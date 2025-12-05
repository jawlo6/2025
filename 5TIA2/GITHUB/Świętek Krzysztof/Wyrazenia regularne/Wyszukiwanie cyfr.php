<p> Wyszukiwanie cyfr </p>
<?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";
if( preg_match( $wzorzec, $tekst))
    echo "znaleziono cyfre";
else
    echo "nie znaleziono cyfre";