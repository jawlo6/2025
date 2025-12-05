Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["E-mail"]; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "connected successful";

$name = $_POST["name"];
$email = $_POST["E-mail"];


$sql = "INSERT INTO MyGuests (firstname, email)
VALUES ('$name', '$email')";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "new record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
