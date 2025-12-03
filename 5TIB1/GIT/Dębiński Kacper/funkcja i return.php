============================================================

<?php
function add_some_extra(&$string){
    $string .= 'and something extra. ';


}
$str = "this is a string,";
add_some_extra($str);
echo $str;
?>
