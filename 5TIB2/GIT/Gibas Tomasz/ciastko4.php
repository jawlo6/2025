<p>Ciasteczko<p>
<?php
$cookie_name = 'uczen';
$cookie_value = 'Tomasz';
$cookie_expire = time() + (24*60*60*8);
setcookie($cookie_name,$cookie_value,$cookie_expire);


?>