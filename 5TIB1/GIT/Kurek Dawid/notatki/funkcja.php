<?php
    function add_some_extra(%$string){
        $string .= 'and something extra.';
    }
    $str = 'This is a string, ';
    add_some_extra($str);
    echo $str;
?>
<?php
    function square($num){
        return $num * $num;
    }
    echo square(4);
?>
<?php
    function square($num){
        return $num * $num;
    }
    echo square(4);
?>
