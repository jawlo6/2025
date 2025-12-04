<?php

$mylife = fopen("test.txt", "r")
        or die("unable to open file!");
    echo fread($mylife,filesize("test.txt"));
    fclose($mylife);
    ?>