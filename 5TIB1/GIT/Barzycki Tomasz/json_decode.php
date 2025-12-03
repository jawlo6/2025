<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

// Domyślne zachowanie: dekoduje JSON do obiektu standardowej klasy (stdClass)
var_dump(json_decode($json));

// Drugi argument (true): dekoduje JSON do tablicy asocjacyjnej
var_dump(json_decode($json, true));
?>
