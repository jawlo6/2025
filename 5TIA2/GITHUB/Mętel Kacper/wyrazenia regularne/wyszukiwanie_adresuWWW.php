<?php
    $wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
    $tekst = "adres: www.zsguscha.pl";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono strone internetowa";
    else
        echo "nie znaleziono strony internetowej";
?>