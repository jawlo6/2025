<?php
    $wzorzec = '/\d{2}-\d{3}/';
    $tekst = "poczta 34-222 Zawoja";
    if ( preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono kod pocztowy " . $matches[0];
    else
        echo "nie znaleziono kodu pocztowego";
?>