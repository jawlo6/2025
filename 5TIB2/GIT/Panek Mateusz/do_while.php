<?php
$x=1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x<=5);

echo "<br>";

$y=0;

do {
    echo "Liczba wynosi: $y <br>";
    $y--;
} while ($y>=-10);

echo "<br>";

$z=2;

do { 
    if($z %2 == 0) {
    echo "Parzysta liczba: $z <br>";
    }
    $z++;

}while($z<=10);


?>