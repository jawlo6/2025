<?php
$cookie_name = "user";


// 1. Kasowanie ciasteczka: ustawienie czasu ważności na przeszłość (aktualny czas - 1 godzina)
setcookie($cookie_name, "", time() - 3600);


// 2. Weryfikacja stanu ciasteczka
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
