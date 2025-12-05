<?php
$now = time();
$studniowka = mktime(19, 0, 0, 1, 21, 2026);

$roznica = $studniowka - $now;
$dni = floor($roznica / (60 * 60 * 24));

echo "<br>Matura: " . date("d.m.Y H:i", $studniowka);
echo "<br>Do studniówki zostało: $dni dni";
?>
