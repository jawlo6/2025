<?php    //wyszukiwanie adresu www
$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst = "adres: www.zsgsucha.pl,  https://zsgsucha.pl";
if( preg_match( $wzorzec, $tekst, $znaleziono ) )
    echo "znaleziono adres www:<BR>" . $znaleziono[0];
else
    echo "nie znaleziono adresu www";
