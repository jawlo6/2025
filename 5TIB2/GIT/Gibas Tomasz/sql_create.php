<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());

}
echo "connected successfully<br>";

$database = "goetel";

$sql = "CREATE DATABASE $database";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else {
    echo "error creating database:" . mysqli_error($conn);
}
?>