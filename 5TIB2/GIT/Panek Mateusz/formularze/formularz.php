
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

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name','$email')";
echo $sql;
if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





