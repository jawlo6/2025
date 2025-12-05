<?php
$servername = "localhost"; // lokalny serwer
$username = "root"; // domyślnie root
$password = ""; // puste hasło (zmień jeśli masz inne)
$database = "goetel7"; // nazwa bazy danych

// Tworzenie połączenia
$conn = mysqli_connect($servername, $username, $password, $database);

// Sprawdzenie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
echo "Connected successfully <br>";

// Pobieranie danych z formularza
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$fav_language = $_POST["fav_language"];

// Tworzenie zapytania SQL
$sql = "INSERT INTO MyGuests (firstname, lastname, fav_language) VALUES ('$firstName', '$lastName', '$fav_language');";

// Wykonanie zapytania
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
}

// Zamknięcie połączenia
mysqli_close($conn);
?>
