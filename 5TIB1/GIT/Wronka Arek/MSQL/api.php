<?php
// Połącz się z serwerem MySQL - podejście proceduralne


$servername = "localhost";
$username = "username";   // lub np. "root"
$password = "password";   // lub np. "" (pusty ciąg)


// Utwórz połączenie
$conn = mysqli_connect($servername, $username, $password);


// Sprawdź połączenie
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>
