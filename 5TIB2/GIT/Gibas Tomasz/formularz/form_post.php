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


Welcome <?php echo $_POST['name'];?><br>
Your email addres is: <?php echo $_POST['email'] . "<br>";?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO MyGuests (firstname, email)
        Values ('$name','$email')";  
echo $sql;

if (mysqli_query($conn,$sql)){
    echo "<br>" . "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
