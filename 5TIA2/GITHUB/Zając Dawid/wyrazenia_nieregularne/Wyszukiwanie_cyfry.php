<p> Wyszukiwanie cyfry </p>

<?php
$wzorzec='/\d/';
$tekst="mam 4 zeszysty ";
if( preg_match($wzorzec, $tekst) )
echo "znaleziono cyfre";
else
    echo " nie znaleziono cyfry";
?>