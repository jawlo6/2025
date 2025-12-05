<?php
$myfile = fopen("XD.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("XD.txt"));
fclose($myfile);
?>
