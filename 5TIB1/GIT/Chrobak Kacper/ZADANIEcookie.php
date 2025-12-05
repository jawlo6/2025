<?php
    $cookie_name = 'uczen';
    $cookie_value = 'Kacper';
    $cookie_expire = time() + (4*24*60*60);
    setcookie($cookie_name, $cookie_value, $cookie_expire);
?>
