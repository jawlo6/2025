
<p>Odczytujemy ciasteczko o podanej nazwie</p>
<?php
$cookiename = "user";
if(!isset($_COOKIE[$cookiename])) {
    echo "Cookie name '" . $cookiename . "' is not set!";
}
else {
    echo "Cookie '" . $cookiename . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookiename];
}