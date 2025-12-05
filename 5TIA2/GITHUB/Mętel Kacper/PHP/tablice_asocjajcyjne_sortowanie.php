<?php
    $age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];

    asort($age);
    echo var_dump($age)."<br>";

    ksort($age);
    echo var_dump($age);
?>