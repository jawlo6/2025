<?php
$cookie_name = "uczen";
$cookie_value = "Mateusz";
setcookie($cookie_name, $cookie_value, time() - 3600);
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie name '" . $cookie_name . "' is not set!";
}
else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name]; 
}