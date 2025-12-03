<?php
function addsomeextra(&$string){
    $string .= 'add something extra';
}
$str = 'this is string';
addsomeextra($str);
echo $str;
?>