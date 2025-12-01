<?php
    $wzorzec = '/byc/';
    $tekst = 'byc albo nie byc';
    if( preg_match($wzorzec, $tekst))
    {
        echo "znaleziono wzorzec";
        echo "znaleziono : " . preg_match_all($wzorzec, $tekst);
    }
    else 
        echo "nie znaleziono wzorca";
?>