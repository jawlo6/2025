<?php
$myfile = fopen("plik.txt", "r") or die ("Unable to open file");

echo fread($myfile, filesize("plik.txt"));
fclose(($myfile));
?>

