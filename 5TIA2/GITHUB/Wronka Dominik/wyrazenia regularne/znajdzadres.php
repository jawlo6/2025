<p>Wyszukiwanie adresu strony</p>
<?php
$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst = "strona www.wikipedia.org";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono adres ";
else
    echo "Nie znaleziono adresu";
?>
