<?php
session_start();

echo 'Welcome to page #1';

// Zapisanie danych w sesji
$_SESSION['favcolor'] = 'purple';
$_SESSION['animal']   = 'tiger';
$_SESSION['time']     = time();

// Link do kolejnej strony
echo '<br/><a href="session2.php">Page 2</a>';
?>
