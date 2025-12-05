<?php
// wyszukiwanie adresu email

// Wzorzec ze zdjęcia jest uproszczony i może być niepoprawny w wielu przypadkach.
// Używam wzorca ze zdjęcia.
$wzorzec = '/[-\w.]+@[[A-z0-9]+\.[A-z]/';


$tekst = "email: john@poczta.eu";


if( preg_match( $wzorzec, $tekst ) ) {
    echo "Znaleziono email";
}
else {
    echo "Nie znaleziono email";
}
?>
