<?php
    function writemsg(&$string) {
        $string .= 'and something extra.';
    }
    $str = 'this is a string, ';
    writemsg($str);
    echo $str;

?>