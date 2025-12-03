============================================================

<?php
$wzorzec = '/\S+\.gif/i';
// i oznacza ignorowanie wielkości liter
$tekst = "W pliku obrazek.gif jest ikona";
if (preg_match($wzorzec, $tekst)) {
    echo "znaleziono obrazek";
}
else {
    echo "nie znaleziono obrazka";
}
?>
