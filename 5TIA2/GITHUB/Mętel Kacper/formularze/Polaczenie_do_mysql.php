<?php
    $servername = "localhost";
    $username = "root";
    $passowrd = "";
    $database = "goetel13";
    $conn = mysqli_connect($servername, $username, $passowrd, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connected successfully";