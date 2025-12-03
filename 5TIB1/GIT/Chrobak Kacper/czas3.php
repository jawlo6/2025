<?php
$now = time();
$czas = 215*24*60*60;
$czas3 = 100*24*60*60;
$czas2 = $now + $czas;
echo "<br> matura ma sie odbyc: ".
    //date("h:i:sa d.m.Y", $now + $czas);
    date("d.m.Y h:i:sa",$czas2 - $czas3);
?>