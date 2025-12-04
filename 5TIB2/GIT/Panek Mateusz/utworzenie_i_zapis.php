<?php

$mylife = fopen("nowy.txt", "w")
        or die("Unable to open file!");
    $txt = "Mateusz";
    fwrite($mylife,$txt);
    fclose($mylife);
    ?>