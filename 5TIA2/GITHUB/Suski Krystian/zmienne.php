<?php
$foo = 'Bob';      // Przypisanie wartości 'Bob' do $foo
$bar = &$foo;      // Referencja $foo przez $bar i odwrotnie
$bar = 'Andy';     // Zmiana wartości przez referencję
echo $bar;         // Wyświetli: Andy
echo $foo;         // Wyświetli: Andy (bo $foo jest referencją do $bar)
?>

