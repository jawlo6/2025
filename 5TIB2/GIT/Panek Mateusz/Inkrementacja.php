<?php

echo "<h3>Postincrement</h3>";
$a=1;
echo "Should be 1: " . $a++ . "<br />\n";
echo "Should be 2: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a=1;
echo "Should be 2: " . ++$a . "<br />\n";
echo "Should be 2: " . $a . "<br />\n";

?>