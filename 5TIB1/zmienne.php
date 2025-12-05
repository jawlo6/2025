<?php
    $zmienna_bool = false; // typ boolean
    $zmienna_int = 10; // typ integer
    $zmienna_float = 10.5; // typ float 
    $zmienna_string = "Hello, World!"; // typ string
    
    echo gettype($zmienna_bool) . $zmienna_bool . "<br>"; 
    print gettype($zmienna_int) . $zmienna_int."<br>"; // wyświetli "integer"
    echo gettype($zmienna_float) . "<br>"; // wyświetli "double"
    print gettype($zmienna_string) . "<br>"; // wyświetli "string"
?>
