<?php
$servername = "localhost";
$username = "root"; // root
$password = ""; // ""
$database="goetel1";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


echo "<br>";

$login = $_POST["name"];
$password = sha1($_POST["haslo"]);

$sql = "INSERT INTO MyGuests (login, password) VALUES ('$login','$password')";

echo $sql;
if(mysqli_query($conn, $sql)) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>