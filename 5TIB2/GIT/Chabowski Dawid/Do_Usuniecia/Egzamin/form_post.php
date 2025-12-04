<?php
$servername = "localhost";
$username = "root";
$password = "";
$darabase = "goetel7";
$conn = mysqli_connect($servername, $username, $password , $darabase);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
Welcome <?php echo $_POST["name"]; ?> 
Your Email Is <?php echo $_POST["email"]; ?>
<?php
$name= $_POST["name"];
$email= $_POST["email"];

$sql = "INSERT INTO MyGuests (firstname, email)
VALUES ('$name', '$email')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}