<?php
$string="Bolek i Lolek";
$szukane_slowo = "Olek";


if (strpos($string, $szukane_slowo) == 1) {
    echo "Słowo: '$szukane_slowo' występuje w stringu '$string'.";
} else {
    echo "Słowo: '$szukane_slowo' nie występuje w stringu '$string'.";
}


?>