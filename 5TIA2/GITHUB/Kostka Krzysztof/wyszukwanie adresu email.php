<?php //wyszukiwanie strony
$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst = "email: www.john@poczta.eu";
if(preg_match ($wzorzec, $tekst))
echo "znalezono strone";
else
echo"nie znaloziono strony";
?>
