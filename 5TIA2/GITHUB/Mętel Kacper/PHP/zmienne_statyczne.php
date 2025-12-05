<?php
    function test(){
        static $licznik=0;
        echo $licznik;
        $licznik++;
    }
    test();
    test();
    test();
?>
