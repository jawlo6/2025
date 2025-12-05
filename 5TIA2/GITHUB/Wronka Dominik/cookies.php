<?Php
$_COOKIE_name = "user";
$_COOKIE_value = "John doe";
$cookie_expire = time() + (24-60-60);
setcookie($_COOKIE_name, $_COOKIE_value, $cookie_expire);
