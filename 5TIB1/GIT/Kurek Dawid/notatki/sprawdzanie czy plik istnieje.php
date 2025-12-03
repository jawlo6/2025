<?php
    $y = 1;
    $fn1 = fn($x) => $x + $y;
?>



<?php
 $filename = 'somefile.txt';
 echo $filename . ' :  ' . filesize($filename) . ' bytes ';
 
?>



<?php
$myfile = fopen("test.txt", "r") or die("Unable to open file!");


echo fread($myfile, filesize("test.txt"));


fclose($myfile);
?>



<?php
    $myfile = fopen("test.txt" , "r")
        or die("unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>
