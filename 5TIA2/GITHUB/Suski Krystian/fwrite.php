<?php
$myfile=fopen("newfile.txt","w")
                or die("unable to read file");
$txt ="John Doe\n";
fwrite($myfile,$txt);
fclose($myfile);
?>
