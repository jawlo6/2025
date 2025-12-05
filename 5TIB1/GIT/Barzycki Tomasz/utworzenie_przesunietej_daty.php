<?php
// 1. Pobranie aktualnego znacznika czasu (liczba sekund od 1.01.1970)
$now = time();

// 2. Obliczenie liczby sekund w tygodniu
// 7 dni * 24 godziny * 60 minut * 60 sekund
$week = 7*24*60*60;

// 3. Wyświetlenie daty przesuniętej o tydzień
// Dodajemy liczbę sekund w tygodniu ($week) do aktualnego czasu ($now)
echo "<br>Za tydzień: " . date("d.m.Y h:i:sa", $now + $week );
?>
