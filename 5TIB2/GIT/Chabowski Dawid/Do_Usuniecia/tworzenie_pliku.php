<?php
$myfile = fopen("ddd.txt", "w") or die("Unable to open file!");
$txt = "Daiwd\n";
fwrite($myfile, $txt);
fclose($myfile);
?>