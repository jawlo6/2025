<p>Wyszukiwanie wyrazu w tekście</p>
<?php
$wzorzec = '/być/';
$tekst = "być albo nie być";
if (preg_match($wzorzec, $tekst))
    echo "Znaleziono wzorzec";
else
    echo "Nie znaleziona wzorca";
echo "Znaleziono: " . preg_match_all( $wzorzec, $tekst);
?>
