<?php
$now = time();

// Liczba sekund w tygodniu
$week = 7*24*60*60;

// Nowy format: GODZINA DATA
echo "<br>Za tydzień: " . date("h:i:sa d.m.Y", $now + $week );
?>
