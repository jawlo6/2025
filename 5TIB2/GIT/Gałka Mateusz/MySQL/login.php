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
$login = $_POST["name"];
$password = sha1($_POST["haslo"]);
$sql = "SELECT login, password from MyGuests Where login = '$login'";
if($result = mysqli_query($conn,$sql)){
    $row = mysqli_fetch_assoc ($result);
    if ($password == $row['password']){
        echo "zalogowano sie pomyslnie";
    }
} else {
    echo " Error " . $sql . "<br>" . mysqli_error($conn);
}





?>

