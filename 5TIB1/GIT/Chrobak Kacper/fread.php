<?php
    $myfile = fopen("funkcje.php", "r")
        or die("Unable to open file!");
    echo fread($myfile, filesize("funkcje.php"));
    fclose($myfile);
?>