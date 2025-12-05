<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "goetel7"; 

    
    $conn = mysqli_connect($servername, $username, $password, $database);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }
    echo "Connected successfully <br>";
$login = $_POST["login"];
$password = sha1($_POST["haslo"]);

$sql = " Select login , haslo from MyGuests where login = '$login'";
if ($result = mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    if ($password == $row ['haslo']) {

        echo "Zalogowano pomyślnie";
    

    }
}
    else {
        echo "error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    ?>