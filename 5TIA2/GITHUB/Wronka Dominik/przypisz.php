<?php
$a=3; //assignemnt
$b= &$a; //b is a reference to a

print "$a\n";
print "$b\n";

$a=5;

print "$a\n";
print "$b\n";
?>