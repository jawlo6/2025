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

echo "Connected successfully";


$database = "goetel";
$sql = "CREATE DATABASE $database";
if (mysql_query($sql, $conn)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysql_error($conn);
}


?>
