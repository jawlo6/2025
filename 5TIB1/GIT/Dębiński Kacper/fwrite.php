============================================================

<?php
$myfile = fopen("newfile.txt","w")
or die("unable to open the file!");
$txt = "john doe\n";
fwrite($myfile, $txt);
fclose($myfile); //utworzenie nowego pliku i zapis funkcją fwrite
?>
