<?php
$myfile = fopen("nowyplikk.txt", "w", "r") or die ("Unable to open file");

$txt ="John Doe";
fwrite($myfile, $txt);
fclose(($myfile));
?>

