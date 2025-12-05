<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    $cookie_expire = time() + (24*60*60);
    setcookie($cookie_name, $cookie_value,
            $cookie_expire );
?>



<?php
$cookie_name = "user";


if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
