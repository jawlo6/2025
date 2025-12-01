<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bazakm";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql =  "CREATE TABLE myGuests (
            id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT
                CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    
    if (mysqli_query($conn, $sql)){
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
?>