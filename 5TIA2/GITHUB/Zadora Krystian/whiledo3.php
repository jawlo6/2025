<?php
$numbers = [];
$i = 10;

do {
    $numbers[] = $i;
    $i++;
    } while ($i <= 20);

foreach ($numbers as $num) {
    echo $num . " ";
}
?>