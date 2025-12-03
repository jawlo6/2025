<?php
$now = time();
$week = 7 * 24 * 60 * 60; // sekundy w tygodniu

echo "<br>Za tydzień: " .
     date("d.m.Y h:i:sa", $now + $week);
?>
