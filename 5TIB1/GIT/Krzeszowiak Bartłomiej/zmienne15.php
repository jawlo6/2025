<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "I like " . $age[0] . ", " . $age[1] . " and " . $age[2] . "." . "<br>";

$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
echo var_dump($age)."<br>";

$age=[];
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";