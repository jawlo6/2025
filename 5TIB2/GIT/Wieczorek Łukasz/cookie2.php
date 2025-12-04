<?php
$cookie_name="user";
if(!isset($_cookie[$cookie_name])){
    echo "Ciasteczko o nazwie '".$cookie_name . "'nie jest ustawione";
} else {
    echo "Ciasteczko'" . $cookie_name . "'jest usawione<br>";
    echo "Wartosc ciastecka:" . $_COOKIE[$cookie_name];
}
?>