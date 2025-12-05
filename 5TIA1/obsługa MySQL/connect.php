<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$database = "goetel";
/*
$sql = "CREATE DATABASE $database";
if( mysqli_query($conn, $sql)) {
    echo "Database created sucessfully";

} else {
     echo "Error creating database:" . mysqli_error($conn);
}
*/
if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
    } else {
        echo "Error select database: " .
        mysqli_error($conn);
    }
/*
   $sql = "CREATE TABLE MyGuests(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT
                    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    )";

    if(mysqli_query($conn,$sql)){
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table :". mysqli_error($conn);
    }
*/

    $sql = "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com'); ";
    $sql .= "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com'); ";
    $sql .= "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com');";
    
    echo "<br><br>" . $sql;

    if(mysqli_query($conn, $sql)){
        echo "New record created succesfully";
    }else{
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    echo mysqli_error($conn);     
?>
