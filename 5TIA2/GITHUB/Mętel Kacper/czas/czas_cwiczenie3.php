<?php
    $poczatek = mktime(0,0,0, 1, 1, 2025);
    $rok = date("Y");
    $miesiac = date("m");
    $dzien = date("d");
    $poczatek = $poczatek/(60*60*24);
    $dzis = $rok + $miesiac + $dzien;
    $dzis = $dzis/(60*60*24);
    $minelo = ($poczatek - $dzis);
    echo "od poczatku roku minelo $minelo dni";
?>