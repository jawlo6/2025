<?php
echo strlen("Hello World");
echo strlen("łódź");

echo mb_strlen("łódź");

echo str_word_count(("policz słowa"));

echo str_replace ("World", "Dolly", "Hello World!");

echo strpos("Hello world!", "world");
?>