<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bazakm";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql =  "INSERT INTO MyGuests (firstname, lastname, email) VALUES
            ('John','Doe','john@gmail.com')";

    if (mysqli_query($conn, $sql)){
        echo "wstawiono uzytkownika";
    } else {
        echo "Error tabeli: " . mysqli_error($conn);
    }