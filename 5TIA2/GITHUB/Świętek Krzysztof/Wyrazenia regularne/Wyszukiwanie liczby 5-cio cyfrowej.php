
<p> Wyszukiwanie liczby 5-cio cyfrowej </p>
<?php
$wzorzec = '/\d{5}/';
$tekst = "telefon 564324453";
if( preg_match( $wzorzec, $tekst))
    echo "znaleziono liczbe";
else
    echo "nie znaleziono liczby";
?>

