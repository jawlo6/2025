============================================================

<?php
$myfile = fopen("test.txt","r")
or die("unable to open the file");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);
?>
