<?php
// wyszukiwanie daty
$wzorzec =
'/\b([0-2][0-9]|3[0-1])[-.\/]([0][1-9]|[1][0-2])[-.\/](\d{4})\b/';


$tekst = "Sucha Beskidzka, dn 04.10.2023";


// W tym przykładzie nie jest używana tablica $matches, tylko sprawdzana jest obecność daty.
if( preg_match( $wzorzec, $tekst ) ) {
    echo "Znaleziono datę!";
}
else {
    echo "Nie znaleziono daty!";
}
?>
