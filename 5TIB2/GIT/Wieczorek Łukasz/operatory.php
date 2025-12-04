<?php
$a = 3;
$b = &$a;

print "$a\n";
print "$b\n";

$a = 4;

print "$a\n";
print "$b\n";

echo "<h3>Post increment</h3>";
$c=5;
echo "Powinno byc 5 " . $c++ . "<br/>\n";
echo "Powinno byc 6 " . $c . "<br/>\n";
echo "<h3>Pre increment</h3>";
$c=5;
echo "Powinno byc 6 " . ++$c . "<br/>\n";
echo "Powinno byc 6 " . $c . "<br/>\n";
?>