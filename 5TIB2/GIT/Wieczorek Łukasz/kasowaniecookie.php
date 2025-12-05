<?php
$cookie_name="Uczen";
setcookie($cookie_name, "", time() - 3600);
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie nammed'" . $cookie_name . "'is not set";
} else {
    echo "Cookie'" . $cookie_name . "'is set<br>";
    echo "Value is:" . $_COOKIE[$cookie_name];
}