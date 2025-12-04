<?php

$myfile = fopen("webdictionary.txt","w")
or die("unable to open file!");

$txt = "Tomek";

fwrite($myfile, $txt);
fclose($myfile);

?>