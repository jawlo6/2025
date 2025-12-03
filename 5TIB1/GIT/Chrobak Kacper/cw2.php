<?php
$pliknazwa = "imie.txt";
$imie = "Kacper";
$plik = fopen($pliknazwa, "w");

if ($plik) {
    fwrite($plik, $imie);
    fclose($plik);
}

$plik = fopen($pliknazwa, "r");

if ($plik) {
    $wczytaneimie = fgets($plik);
    fclose($plik);

    echo "Imię: " . $wczytaneimie;
}
?>

