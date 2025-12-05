<?php
    echo "<h3>post inkrementacja</h3>";
    $a = 5;
    echo "should be 5: " . $a++ . "<br>";
    echo "should be 6: " . $a . "<br>";

     echo "<h3>post rekrementacja</h3>";
    $a = 5;
    echo "should be 6: " . ++$a . "<br>";
    echo "should be 6: " . $a . "<br>";

    $a=2;
    $b=1;
    if ($a > $b) {
        echo "a jest większe od b";
    } else {
        echo "a nie jest większe od b";
    }

    while($x <= 5) {
    echo "the numer is: $x <br>";
    $x++; 
    }


    ?>

