<?php
$cookie_name   = "user";
$cookie_value  = "Wiktor Maciaszek";
$cookie_expire = time() + (24 * 60 * 60); // 1 dzień

setcookie($cookie_name, $cookie_value, $cookie_expire);
?>
