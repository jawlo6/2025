============================================================

<?php
$myfile = fopen("webdictionary.txt","r")
or die("unable to open the file");
echo fgets($myfile);
fclose($myfile); //odczytuje wiersz

?>
