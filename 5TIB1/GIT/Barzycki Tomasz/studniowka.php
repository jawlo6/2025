<?php
$matura_timestamp = mktime(0, 0, 0, 5, 4, 2026);

$sto_dni_sekund = 100 * 24 * 60 * 60;

$studniowka_timestamp = $matura_timestamp - $sto_dni_sekund;

echo "Data studniówki (100 dni wcześniej): ";
echo date("d.m.Y", $studniowka_timestamp);
?>
