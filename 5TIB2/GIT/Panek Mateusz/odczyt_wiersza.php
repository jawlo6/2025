<?php


$mylife = fopen("test2.txt", "r")
        or die("Unable to open file!");
    echo fgets($mylife,filesize("test2.txt"));
    fclose($mylife);
    ?>