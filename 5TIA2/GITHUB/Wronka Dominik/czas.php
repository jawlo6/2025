<?php
$now = time();
$czas = mktime (0,0,0, 1,1,2025);

$czassekundu = $now - $czas;
$czasdni = $czassekundu/(24*60*60);
echo "od początku roku mineło  $czasdni";
?>

