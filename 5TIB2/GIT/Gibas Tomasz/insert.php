<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());

}
echo "connected successfully";

$database = "goetel";
/*
$sql = "CREATE DATABASE $database";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else {
    echo "error creating database:" . mysqli_error($conn);
}
*/

if (mysqli_select_db($conn,$database)){
    echo " Data $database Selected";
} else {
    echo "Error Select database:" . mysqli_error($conn);
}
/*
$sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR (30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT
                CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
    if (mysqli_query($conn,$sql)){
        echo "Table MyGuests created successfully";

    } else{
        echo "Error creating table:" . mysqli_error($conn);
    }
*/
    $sql = "INSERT INTO MYGuests (firstname, lastname, email)
                        Values ('John','Doe','john@example.com')";

        if (mysqli_query($conn,$sql)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }         
?>