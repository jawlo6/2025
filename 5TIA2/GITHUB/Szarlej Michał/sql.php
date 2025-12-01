<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database="szkola";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE $database";

$sql = "CREATE TABLE uczniowie (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(30) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        nr_dziennika int(2) not null  
        reg_date Timestamp Default
        CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    VALUES ('Michał','Kowalski','MKowal1337@gmail.com')";

$sql = "INSERT INTO uczniowie (imie, nazwisko, email)
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);


    ?>




