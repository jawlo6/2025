<?php 
session_start();

echo 'welcome to page #2'. '<br>';

echo 'ulobiony kolor: ' . $_SESSION ['favcolor'] . '<br>';
echo 'ulobione zwierze: ' . $_SESSION ['animal']. '<br>';
echo date( 'Y m d H:i:s', $_SESSION ['time']);

echo $_SESSION['bzdura'];


?>
