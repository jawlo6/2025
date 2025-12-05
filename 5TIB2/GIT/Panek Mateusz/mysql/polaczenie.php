<?php 

$servername = "localhost";
$username = "root"; // root
$password = ""; // ""

//Create connection
$conn = mysqli_connect($servername, $username, $password);

//Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


echo "<br>";
$database="goetel1";
//Create database
  /* 
$sql= "CREATE DATABASE $database";
if(mysqli_query($conn,$sql)) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . mysqli_error($conn);
}
*/

echo "<br>";
if(mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
}
else {
    echo "Error select database: " . mysqli_eror($conn);
}


echo "<br>";
/*
$sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT
                CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/
/*
$sql= "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('Artur', 'Polak', 'artur@example.com');";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br" . mysqli_error($conn);
}
*/

 //rzadko już się tak robi

 /*
$sql= "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('John', 'Doe', 'john@example.com');";
$sql.= "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql.= "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('Julie', 'Dooley', 'julie@example.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br" . mysqli_error($conn);
}           
*/
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ) {
while ($row = mysqli_fetch_assoc($result)) {
    echo "id " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
} 
 } else {
    echo "0 results";
}
*/
//drugi sposób 
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ) {
while ($row = mysqli_fetch_row($result)) {
    echo "id " . $row[0]. " - Name: " . $row[1]. " " . $row[2]. "<br>";
}
 } else {
    echo "0 results";
}
*/

//tabelowy sposób
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
echo "<table style='border: 2px solid black;'>";
if(mysqli_num_rows($result) > 0 ) {
while ($row = mysqli_fetch_row($result)) {
    echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
} echo "</table>";
} else {
    echo "0 results";
}
*/

//sposób z listą
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
echo "<ul>";
if(mysqli_num_rows($result) > 0 ) {
while ($row = mysqli_fetch_row($result)) {
    echo "<li>" . $row[0]. " " . $row[1]. " " . $row[2]. "</li>";
} echo "</ul>";
 } else {
    echo "0 results";
}
*/
/*
$sql = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . mysqli_connect_error($conn);
}
*/

/*
$sql = "UPDATE MyGuests SET lastname='Nowak' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
}
else {
    echo "Error updating record: " . mysqli_connect_error($conn);
}
*/

/*
// return the first 30 seconds

$sql = "SELECT * FROM Orders LIMIT 30";

//select records 16 - 25(inclusive)?
$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
*/



?>