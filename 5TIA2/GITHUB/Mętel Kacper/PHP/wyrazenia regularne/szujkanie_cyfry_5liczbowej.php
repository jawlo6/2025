<?php
    $wzorzec = '/\d{5}/';
    $tekst  = "telefon 564324453";
    if (preg_match($wzorzec, $tekst)){
        echo "znaleziono cyfre!";
    } else {
        echo "nie znaleziono cyfry";
    }
?>