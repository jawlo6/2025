<?php
$servername = "localhost";
$username = "root";
$password = "";


$database="albert";






$conn = mysqli_connect($servername, $username, $password);


if (!$conn){
    die("Connection failed: <br>".mysql_connect_error());
}


echo "Connected successfully <br>";


$sql = "CREATE DATABASE $database";


if(mysqli_query($conn, $sql)){
    echo "Database created successfully <br>";
}else{
    echo "Error creating database: <br>". mysqli_error($conn);
}


if (mysqli_select_db($conn, $database)){
    echo "Database $database selected! <br>";
}else{
    echo "Error selected database: <br>". mysqli_error($conn);
}
?>
