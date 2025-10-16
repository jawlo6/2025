<?php 
// połączenie z serwerem my_SQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";

$conn = mysqli_connect($servername, 
                        $username, 
                        $password,
                        $database );

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

// wstawianie danych do tabeli
$name=$_POST['name'];
$email=$_POST['email'];
$sql = "INSERT INTO MyGuests(firstname , email)
                VALUES( '$name', '$email' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
