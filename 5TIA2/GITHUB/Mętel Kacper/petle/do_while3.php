<?php
    $tab = [];
    $x = 10;
    for ($i = 0; $i < 11; $i++) {
        $tab[$i] = $x;
        $x++;
        echo "$i element tablicy wynosi: " . $tab[$i] . "<br>";
    }
?>