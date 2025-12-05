<?php

$myfile = fopen("imie.txt", "w") or die("Nie można otworzyć pliku!");
$txt = "Dominik";
fwrite($myfile, $txt);
fclose($myfile);


$myfile = fopen("imie.txt", "r") or die("Nie można otworzyć pliku!");

echo fread($myfile, filesize("imie.txt"));

fclose($myfile);
?>

