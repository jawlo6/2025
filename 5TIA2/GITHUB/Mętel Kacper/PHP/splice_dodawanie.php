<?php
    $a1 = array(0,1,2,3);
    $a2 = array(5,6);
    array_splice($a1,1,0, $a2);  //1 pozycja, 0 dodawanie elemetow
    print_r($a1);
?>