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

$login = $_POST["name"];
$password = sha1($_POST["haslo"]);

$sql = "SELECT login, password FROM MyGuests WHERE login='$login'";

if( $result = mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_assoc($result);
    if($password == $row['password']) {
        echo "Zalogowano pomyślnie";
    } 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>