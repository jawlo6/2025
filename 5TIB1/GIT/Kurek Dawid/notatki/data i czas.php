<?php
echo "The time is " . date( "h:i:sa");
?>


<?php
$rok = date( "y");
$miesiac = date("m");
$dzien = date( " d ");
echo "$dzien/$miesiac/$rok <br>";


echo "Today is " . date( "y/m/d") . "<br>";
echo "Today is " . date( "l") . "<br>";


?>



<?php
$czas = mktime(11,14,54,8,12,2014);
echo "Created date is " . date( "d.m.Y h:i:sa", $czas );
?>



<?php
$now = time();
$week = 7*24*60*60;
echo "<br>za tydzięń: ".
    date("d.m.Y h:i:sa", $now +$week );
?>
