<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a) . "<br>";
print_r ($a);
$b=array("a"=>"red", "b"=>"green");
array_unshift($b,"blue");
print_r($b);
?>