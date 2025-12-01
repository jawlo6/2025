<p>Wyszukiwanie pliku.gif</p>
<?php
$wzorzec = '/\S*\.gif/i';
$tekst = "w pliku obrazek.gif jest ikona";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono obrazek";
else
    echo "Nie znaleziono obrazka";
?>
