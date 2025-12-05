<?php
    echo strlen("Hello World!")."<br>"; // Outputs: 13 
    echo strlen("Łódź")."<br>"; // Outputs: 5
    echo mb_strlen("Łódź"); // Outputs: 4
?>