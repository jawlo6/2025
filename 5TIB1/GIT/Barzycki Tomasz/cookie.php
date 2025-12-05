<?php
$cookie_name = "user";
$cookie_value = "John Doe";
// Obliczenie czasu wygaśnięcia: aktualny czas + (24 godziny * 60 minut * 60 sekund)
$cookie_expire = time() + (24 * 60 * 60); // 1 day


// Ustawienie ciasteczka
setcookie($cookie_name, $cookie_value, $cookie_expire);
?>
