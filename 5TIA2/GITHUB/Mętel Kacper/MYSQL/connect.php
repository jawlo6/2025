<?php
        // laczenie z baza danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connected successfully <br>";
    
        // tworzenie bazy danych
    $database = "bazakm";
    
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)){
        echo "Database created successfully <br>";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

        //polaczanie z baza danych
        if (mysqli_select_db($conn, $database)){
            echo " Database $database selected";
        } else {
            echo "Error select database: " . $database; 
        }
?>