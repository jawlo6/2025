<?php
// połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());

}
echo "connected successfully" . "<br>";


?>


<?php
$name = "Tom";
$login = $_POST["name"];
$password = sha1( $_POST["haslo"]);

$sql = "INSERT INTO MyGuests (login, password)
                    VALUES ('$login','$password')";
echo $sql;
if(mysqli_query($conn,$sql)){
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}