<?php //wyszukiwanie adresu www
$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst = "adres: www.zsgsucha.pl";
if(preg_match ($wzorzec, $tekst))
echo "znalezono www";
else
echo"nie znaloziono www";
?>
