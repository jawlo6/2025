<?php
$myfile=fopen("webdisctionary.txt","r")
                or die("unable to read file");
echo fread($myfile,filesize("webdisctionary.txt"));
fclose($myfile);
?>
