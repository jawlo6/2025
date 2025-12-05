<?php
$now = time();
$week = 7*24*60*60;
echo "Za tydzien: ". date("d.m.y h:i:sa", $now + $week);
?>