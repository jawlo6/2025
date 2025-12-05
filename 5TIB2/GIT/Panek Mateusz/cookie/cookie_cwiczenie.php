<?php

$cookie_name = "uczen";
$cookie_value ="Mateusz";
$cookie_expire = time() + (16*24*60*60); 
setcookie($cookie_name, $cookie_value, $cookie_expire);

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie name '" . $cookie_name . "' is not set!";
}
else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name]; 
}