<p> Wyszukiwanie wyrazu w tekście </p>
<?php
$wzorzec = '/być/';
$tekst = "być albo nie być";
if( preg_match( $wzorzec, $tekst ) )
    echo"znaleziono wzorzec";
else
    echo "nie znaleziono wzorca";
echo "znaleziono: " . preg_match_all( $tekst, $tekst );