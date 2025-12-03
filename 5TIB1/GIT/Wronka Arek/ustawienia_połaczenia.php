<?php
// Ustawienia połączenia
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel"; // Nazwa bazy danych do wybrania


// 1. Utwórz połączenie z serwerem MySQL (bez wskazywania konkretnej bazy)
$conn = mysqli_connect($servername, $username, $password);


// Sprawdzenie, czy połączenie z serwerem się powiodło
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Próba wybrania bazy danych
if (mysqli_select_db($conn, $database)) {
    echo "Database **$database** selected";
} else {
    // Wypisz błąd, jeśli baza nie istnieje lub nie można jej wybrać
    echo "Error select database: " . mysqli_error($conn);
}


// 3. Zamknij połączenie (dobra praktyka)
mysqli_close($conn);


?>
