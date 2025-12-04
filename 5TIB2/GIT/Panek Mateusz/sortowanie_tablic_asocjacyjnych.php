<?php

$age = array("Peter"=>"15","Ben"=>"20","Joe"=>"30");

asort($age);
print_r($age);

ksort($age);
print_r($age);

?>