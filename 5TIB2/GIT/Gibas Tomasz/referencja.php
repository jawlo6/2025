<?php

$foo = 'Bob';
$bar = &$foo;
$bar = 'andy';
echo $bar;
echo $foo;
?>