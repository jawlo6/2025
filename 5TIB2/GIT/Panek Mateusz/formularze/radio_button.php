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
echo "SQL Connected successfully";


echo "<br>";

$fistname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$fav_language = $_POST["fav_language"];

$sql = "INSERT INTO MyGuests (firstname, lastname, fav_language)
VALUES ('$fistname', '$lastname', '$fav_language')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>