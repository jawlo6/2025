<?php
    $dataMatury = mktime(0, 0, 0, 5, 4, 2026);
    $dataStudniowki = $dataMatury - (100 * 24 * 60 * 60);
    echo "Studniówka wypada w dniu: " . date("d.m.Y", $dataStudniowki);
    
?>