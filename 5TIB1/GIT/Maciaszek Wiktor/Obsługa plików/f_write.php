<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Macias\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
