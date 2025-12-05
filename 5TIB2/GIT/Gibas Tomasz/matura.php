<?php 

$matura = mktime( 0,0,0,5,4,2026);
$studniowka = 100*24*60*60;

echo "Studniówka bedzie dnia:" . date("d.m.Y", $matura - ($studniowka));
?>
