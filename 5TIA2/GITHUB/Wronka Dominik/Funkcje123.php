<?php 
session_start();
echo 'Welcome to page #1';

$_SESSION['imie'] = 'Emil';
$_SESSION['nazwisko'] = 'Chowaniak';


echo '<br/> <a href ="session2.php">Page 2 </a>';
?>
