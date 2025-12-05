<?php
session_start();

echo 'Welcome to page #2<br>';

// Pobranie danych zapisanych wcześniej
echo 'Ulubiony kolor: ' . $_SESSION['favcolor'] . '<br>';
echo 'Ulubione zwierzę: ' . $_SESSION['animal'] . '<br>';
echo 'Czas: ' . date('Y-m-d H:i:s', $_SESSION['time']) . '<br>';
?>
