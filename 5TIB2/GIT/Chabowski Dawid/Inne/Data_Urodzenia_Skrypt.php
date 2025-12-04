<?php
    $dataUrodzenia = "2006-10-11";
    $timestamp = strtotime($dataUrodzenia);
    echo "Data urodzenia: $dataUrodzenia <br>";
    echo "Urodziłeś się w dniu: " . date("l", $timestamp);
    $dataUrodzenia2 = mktime(0, 0, 0, 10, 11, 2006);
    echo "<br>Data urodzenia: " . date("Y-m-d", $dataUrodzenia2) . " <br>";
    echo "Urodziłeś się w dniu: " . date("l", $dataUrodzenia2);
?>