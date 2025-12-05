<?php
    $myfile = fopen("webdictionry.txt", "r") or die("Unable to open file!");
    echo fread ($myfile, filesize("webdictionry.txt"));
    fclose ($myfile);
?>