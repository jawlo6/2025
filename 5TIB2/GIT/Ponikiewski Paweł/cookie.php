<?php 
$cookie_name = "user";
$cookie_value = "John doe";
$cookie_expire = time() + (24*60*60); //1day
setcookie($cookie_name, $cookie_value, $cookie_expire);
?>