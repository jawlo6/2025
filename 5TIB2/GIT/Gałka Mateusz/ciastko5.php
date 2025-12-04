<p>Ciasteczko<p>
<?php
$cookie_name = 'uczen';
$cookie_value = 'Tomasz';
setcookie($cookie_name,"", time() - 3600);
if(!isset($_COOKIE[$cookie_name])){
    echo "Ciasteczko ' " . $cookie_name . "' nie jest utworzone!";
}
else{
    echo "Ciasteczko '" . $cookie_name . "' jest utworzone!<br>";
    echo "Wartosc ciasteczka to: " . $_COOKIE[$cookie_name];
}

?>