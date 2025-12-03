============================================================

<?php
$myfile = fopen("aaa.txt","r")
or die("unable to open the file");
echo fread($myfile,filesize("aaa.txt"));
fclose($myfile);
?>
