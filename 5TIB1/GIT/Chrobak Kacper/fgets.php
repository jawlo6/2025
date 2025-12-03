<?php
    $myfile = fopen("webdictionary.txt", "r")
        or die("Unable to open file!");
    echo fgets($myfile, filesize("webdictionary.txt"));
    fclose($myfile);
?>
