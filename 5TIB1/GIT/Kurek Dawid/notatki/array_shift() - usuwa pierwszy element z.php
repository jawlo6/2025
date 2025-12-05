 array_shift() - usuwa pierwszy element z tablicy
<?php
    $kolory=array("a"=> "red","b"=>"green","c"=>"blue");
    echo array_shift($kolory)."<br>";
    print_r( $kolory );
?>