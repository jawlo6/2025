<?php
$myfile=fopen("webdisctionary.txt","r")
                or die("unable to read file");
echo fgets($myfile);
fclose($myfile);
?>
