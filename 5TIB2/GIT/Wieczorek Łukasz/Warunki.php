<?php
$a=2;
$b=1;
if ($a > $b) {
echo "a is bigger than b"; }

$hour=date("H");
if ($hour < "20") {
echo "Dobrego dnia"; }
else { echo "Dobranoc" ;}

$liczba=10;
$wynik=($liczba>=0) ?"dodatnia" : "ujemna";
echo $wynik;
$favcolor="red";
switch($favcolor) {
    case "red";
    echo "Twój ulubiony kolor to red:";
    break;
    case "blue";
    echo "Twój ulubiony kolor to blue:";
    break;
    default;
    echo "Ani ten ani tamten:";
}

?>