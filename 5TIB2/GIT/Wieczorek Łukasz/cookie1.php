<p>Odczytujemy ciostko o podanej nazwie</p>
<?php
$cookie_name="User";
$cookie_value="Wojtek Doe";
$cookie_expire=time()+(24*60*60); //1day
setcookie($cookie_name, $cookie_value, $cookie_expire);
?>