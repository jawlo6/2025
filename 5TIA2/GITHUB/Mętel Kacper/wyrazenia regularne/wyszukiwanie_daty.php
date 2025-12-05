<?php
    $wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
    $tekst = "Sucha Beskidzka, dn. 04.10.2023";
    if (preg_match($wzorzec,$tekst, $dopasowanie))
        echo "znaleziono date".$dopasowanie[0];
    else 
        echo "nie znaleziono daty";
?>