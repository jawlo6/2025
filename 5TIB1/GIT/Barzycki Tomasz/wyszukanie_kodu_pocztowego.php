<?php
// Wyszukiwanie kodu pocztowego
$tekst = "poczta 34-200 Sucha Beskidzka"; // Przykładowy tekst
$wzorzec = '/\d{2}-\d{3}/'; // Wzorzec dla kodu pocztowego w formacie "xx-xxx"


// $matches jest tablicą przechowującą znalezione dopasowania
if (preg_match($wzorzec, $tekst, $matches)) {
    // Jeśli znaleziono dopasowanie
    echo "Znaleziono kod pocztowy: " . $matches[0];
} else {
    // Jeśli nie znaleziono dopasowania
    echo "Nie znaleziono kodu pocztowego";
}
?>
