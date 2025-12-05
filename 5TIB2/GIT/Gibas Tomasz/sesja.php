<?php 
session_start();

echo 'welcome to page #2';

echo 'ulobiony kolor: ' . $_SESSION ['favcolor'];
echo 'ulobione zwierze: ' . $_SESSION ['animal'];
echo date( 'Y m d H:i:s', $_SESSION ['time']);

echo $_session['bzdura'];


?>
