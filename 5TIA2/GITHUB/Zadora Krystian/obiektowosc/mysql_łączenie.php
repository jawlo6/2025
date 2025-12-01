<?php
//
$servername = "localhost";
$username = "root";
$password = "";
$databse = "goetel";
$conn = mysqli_connect($servername, $username, $password,
             $datbase);
if (!$conn) {
    die ("Connection failed: " . mysql_connect_error());

}
echo "Connected successfully";
