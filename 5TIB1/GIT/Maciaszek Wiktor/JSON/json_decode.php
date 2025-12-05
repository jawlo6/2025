<?php
$json = '{"a":1, "b":2, "c":3, "d":4, "e":5}';

// Zamiana JSON na obiekt PHP
var_dump(json_decode($json));

// Zamiana JSON na tablicę asocjacyjną PHP
var_dump(json_decode($json, true));
?>
