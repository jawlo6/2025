<?php echo $_POST["name"]; ?><br>
Your emial address is: <?php echo $_POST["email"]; ?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel_krystian";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO MyGuests (firstname, email)
VALUES ('$name', '$emial')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}