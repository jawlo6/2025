<?php
echo strlen("Hello world!"); //12 (litery)
echo "<br>";
echo strlen( "Łódź"); //7 (Litery, polskie znaki liczone jako 2)
echo "<br>";
echo mb_strlen("Łódź"); //4 (litery)
echo "<br>";
echo str_word_count("Hello world"); //2 (Wyrazy)
?>