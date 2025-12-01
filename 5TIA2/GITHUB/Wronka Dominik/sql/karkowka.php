<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS szkola";
$conn->query($sql);

$conn->select_db("szkola");

$sql = "CREATE TABLE IF NOT EXISTS 5TIB2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL,
    numer INT NOT NULL
)";
$conn->query($sql);

$imie = "Jan";
$numer = 12;
$sql = "INSERT INTO 5TIB2 (imie, numer) VALUES ('$imie', $numer)";
$conn->query($sql);

$conn->close();
?>
