<?php
session_start();

echo "Welcome to page #1<br>";

$_SESSION['favcolor'] = 'yellow';
$_SESSION['animal']   = 'dog';
$_SESSION['time']     = time();

echo '<a href="test1.php">Page 2</a>';
?>
