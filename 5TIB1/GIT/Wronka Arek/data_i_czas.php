<?php
// Pobieranie poszczególnych elementów daty
$rok = date("Y"); // Pełny rok (np. 2025)
$miesiac = date("m"); // Miesiąc z zerem wiodącym (01 do 12)
$dzien = date("d"); // Dzień miesiąca z zerem wiodącym (01 do 31)

// Wyświetlenie daty w formacie Dzień/Miesiąc/Rok
echo "$dzien/$miesiac/$rok <br>";

// Wyświetlenie daty w formacie Rok/Miesiąc/Dzień
echo "Today is ". date("Y/m/d") . ". <br>";

// Wyświetlenie nazwy dnia tygodnia
echo "Today is ". date("l") . " <br>";
?>
