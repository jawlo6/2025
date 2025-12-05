<?php
$cookie_name = "user";

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie o nazwie '" . $cookie_name . "' nie jest ustawione!";
} else {
    echo "Cookie '" . $cookie_name . "' jest ustawione!<br>";
    echo "Wartość: " . $_COOKIE[$cookie_name];
}
?>
