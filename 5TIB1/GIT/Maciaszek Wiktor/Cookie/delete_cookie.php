<?php
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600);

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' zostało usunięte!";
} else {
    echo "Cookie '" . $cookie_name . "' nadal istnieje!<br>";
    echo "Wartość: " . $_COOKIE[$cookie_name];
}
?>
