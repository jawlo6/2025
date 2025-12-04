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

    $sql = "INSERT INTO MyGuests (login, haslo) VALUES ('$login', '$password');";
    echo $sql . "<br>";

    if (mysqli_query($conn, $sql)) {
        echo "New user created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }

    mysqli_close($conn);
?>