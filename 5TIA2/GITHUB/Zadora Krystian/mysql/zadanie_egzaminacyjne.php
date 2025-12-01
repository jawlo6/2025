<?php
$servername = "localhost";
$username = "root";  //user
$password = ""; //passowd
$database = "szkola";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $database);

//Check connection

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected sucessfully";


$database="szkola";

$sql= "CREATE DATABASE $database";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database:" .mysqli_error($conn);
}

if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
} else {
    echo "Error selected database: ". mysqli_error($conn);
}

$sql = "CREATE TABLE 5TIB2 (
            nr_z_dziennika INT(6) PRIMARY KEY,
            imie VARCHAR(30) NOT NULL,
               )";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: ". mysqli_error($conn);
    }
    

    $sql = "INSERT INTO 5TIB2 (nr_z_dziennika, imie)
                        VALUES ('24', 'Krystian')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }