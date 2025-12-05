<?php
// Wyszukiwanie adresu email i jego wypisanie


// Uproszczony i wadliwy wzorzec ze zdjęcia (do celów ćwiczeniowych).
// Ten wzorzec nie jest zalecany do walidacji adresów email w prawdziwych aplikacjach!
$wzorzec = '/[-\w.]+@[[A-z0-9]+\.[A-z]/';


// 1. Zmień ten tekst na ciąg zawierający Twój adres e-mail.
$tekst = "Mój kontakt to: twoj.adres.email@domena.com";


// 2. Dodajemy trzeci argument ($matches) do przechwycenia znalezionego adresu.
if( preg_match( $wzorzec, $tekst, $matches ) ) {


    // 3. Wypisujemy znaleziony adres e-mail, który znajduje się w $matches[0].
    echo "Znaleziono Twój adres email: " . $matches[0];
}
else {
    echo "Nie znaleziono adresu email!";
}
?>
