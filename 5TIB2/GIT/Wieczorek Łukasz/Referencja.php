<p>Referencja jest to wskazanie na inną zmienną </p>
<?php
$foo ='Bob';
$bar = &$foo; //referencja na foo
$bar ='Andy';
echo $bar;
echo $foo;
//zmienne statyczne