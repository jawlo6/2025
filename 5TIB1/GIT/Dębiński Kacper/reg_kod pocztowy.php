============================================================

<?php
// wyszukiwanie kodu pocztowego
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "poczta 34-200 Sucha Beskidzka";
// $matches jest tablicą przechowująca znalezione dopasowania
if (preg_match($wzorzec, $tekst, $matches)) {
    echo "znaleziono kod pocztowy: " . $matches[0];
}
else {
    echo "nie znaleziono kodu pocztowego";
}
?>
