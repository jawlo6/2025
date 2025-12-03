<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n"; // najpierw używa, potem zwiększa
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n"; // najpierw zwiększa, potem używa
echo "Should be 6: " . $a . "<br />\n";
?>
