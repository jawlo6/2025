<?php
    // odczyt pliku 

    $myFile = fopen("newfile.txt","r")
                or die("Unable to open file");
    echo fread( $myFile, filesize("newfile.txt") );
    fclose( $myFile );