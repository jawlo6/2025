<?php 
// połączenie z serwerem my_SQL
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Utworzenie bazy danych 
$database = "goetel7";
/*$sql = "CREATE DATABASE $database";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
} */

// wybór bazy danych
if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
} else {
    echo "Error selecting database: " . mysqli_error($conn);
}

// tworzenie tabeli
/*
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT 
    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/

// wstawianie danych do tabeli
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Tomcio', 'Gibcio', 'gibas@lesnica.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// wyszukiwanie danych z tabeli i wypisanie danych
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<ul>"; // rozpoczęcie listy
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li>ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "</li>";
    }
    echo "</ul>"; // zakończenie listy
} else {
    echo "0 results";
}
?>
