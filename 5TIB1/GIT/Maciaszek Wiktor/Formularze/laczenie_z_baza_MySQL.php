<?php
// połączenie z serwerem my_SQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)  {
    die("Connection failed: " . mysqli_connect_error());
}


echo "Connected successfully";