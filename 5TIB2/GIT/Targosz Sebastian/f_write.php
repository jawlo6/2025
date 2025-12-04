<?php 
$myfile = fopen("nowyplik.txt", "w") or die("Unable to open file!");
$txt = "Sebastian\n";
fwrite($myfile, $txt);
fclose($myfile);
?>