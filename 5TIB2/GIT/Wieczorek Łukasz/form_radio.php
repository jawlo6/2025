<?php
$servername = "localhost";
$username = "root";   // "root"
$password = "";   // "" 
$dbname = "goetel";
// Utwórz połączenie
$conn = mysqli_connect($servername, $username, $password, $dbname);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fav_language = $_POST['fav_language'];
$sql="Insert into MyGuests (firstname, lastname, fav_language) values ('$firstname', '$lastname', '$fav_language')";
if(mysqli_query($conn, $sql)){
    echo "Nowy rekord został dodany pomyślnie.";
} else{
    echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
}
?>
