<P> Tworzymy ciasteczko o terminie ważności 1 doba </P>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_expire = time() + (24*60*60); // 1 doba
setcookie($cookie_name, $cookie_value, $cookie_time); // '/' dostępne w całej domenie
?>