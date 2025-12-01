<?php
    $czas = mktime(0,0,0, 5, 4, 2025 );
    $studniowka = 60*60*24*100;
    echo "studniowka odbedzie się: " . date ("d:m:Y" , $czas- $studniowka );
?>
