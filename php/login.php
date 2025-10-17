<?php 
// połączenie z serwerem my_SQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$login= $_POST["name"];
$password = sha1( $_POST["haslo"]);

$sql = "SELECT login, password from MyGuests where login='$login'";

if( $result=mysqli_query($conn, $sql) ) { 
    $row = mysqli_fetch_assoc($result);
    if( $password == $row['password'] ){
        echo "zalogowano pomyślnie";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
