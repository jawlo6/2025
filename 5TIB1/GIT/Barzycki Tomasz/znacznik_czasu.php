<?php
// Funkcja mktime() tworzy znacznik czasu (liczba sekund) dla podanej daty.
// mktime( godzina, minuta, sekunda, miesiąc, dzień, rok )
$czas = mktime( 11, 14, 54, 8, 12, 2014 );

// Wyświetlenie sformatowanej daty i czasu przy użyciu utworzonego znacznika czasu
echo "Created date is " . date("d.m.Y h:i:sa", $czas );
?>
