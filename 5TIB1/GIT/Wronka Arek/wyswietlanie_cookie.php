<?php
$cookie_name = "user";


if(!isset($_COOKIE[$cookie_name])) {
    // JEŚLI cookie NIE jest ustawione (lub wygasło)
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    // JEŚLI cookie JEST ustawione
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
