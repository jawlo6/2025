<?php
    $myfile = fopen("test.txt", "w")
        or die("Unable to open file!");
    $txt = "John criminal\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
