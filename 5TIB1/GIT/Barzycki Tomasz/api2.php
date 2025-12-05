<?php
// Użyj danych logowania z poprzedniego slajdu
$servername = "localhost";
$username = "root";
$password = "";


// Utwórz połączenie z serwerem (bez wskazywania bazy danych)
$conn = mysqli_connect($servername, $username, $password);


// Sprawdź połączenie
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// ----------------------------------------------------
// KOD Z AKTUALNEGO SLAJDU - TWORZENIE BAZY DANYCH
// ----------------------------------------------------


$database = "goetel";


// Utwórz zapytanie SQL do stworzenia bazy danych
$sql = "CREATE DATABASE $database";


// Wykonaj zapytanie
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully: **$database**";
} else {
    // Wypisz błąd, jeśli zapytanie się nie powiodło (np. baza już istnieje)
    echo "Error creating database: " . mysqli_error($conn);
}


// Zamknij połączenie
mysqli_close($conn);


?>
