<?php
$plik = fopen("owoce.csv", "r");
$wiersz = fgets($plik);                // odczyt 1 wiersza
$owoce = explode(";", $wiersz);        // rozdzielenie danych wg separatora ";"

foreach ($owoce as $owoc) {
    echo $owoc . "<br>";
}

var_dump($owoce); // sprawdzenie struktury tablicy
?>
