============================================================

<?php
$servername = "localhost";
$username = "root"; // np. root
$password = ""; // np. ""

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

$database = "goetel";
$sql = "CREATE DATABASE IF NOT EXISTS $database";

// Tworzenie bazy danych
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Wybór bazy danych
if (mysqli_select_db($conn, $database)) {
    echo "Database '$database' selected successfully<br>";
} else {
    echo "Error selecting database: " . mysqli_error($conn) . "<br>";
}

// Zamknięcie połączenia
mysqli_close($conn);
?>
