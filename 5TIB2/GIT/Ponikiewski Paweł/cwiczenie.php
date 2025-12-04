<?php 
$cookie_name = "uczen";
$cookie_value = "Pawel";
$cookie_expire = time() + (24*60*18); //1day
setcookie($cookie_name, $cookie_value, $cookie_expire);
?>