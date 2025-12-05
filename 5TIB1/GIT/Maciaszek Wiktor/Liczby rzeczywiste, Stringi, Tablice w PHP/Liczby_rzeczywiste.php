<?php
$a = 1.234;         // 🔹 liczba dziesiętna z częścią ułamkową
$b = 1.2e3;         // 🔸 zapis wykładniczy = 1.2 * 10^3 = 1200
$c = 7E-10;         // 🔸 zapis wykładniczy z ujemnym wykładnikiem
$d = 1_234.567;     // 🟢 liczba z podkreśleniem dla czytelności

print($a . " " . $b . " " . $c . " " . $d);
?>
