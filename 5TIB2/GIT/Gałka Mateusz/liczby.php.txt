<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());

}
echo "connected successfully";

$database = "goetel42";
//tworzenie tabeli

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

// tworzenie tabeli
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

        //wpisywanie wartosci do tabeli
        /*
     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('John','Doe','john@example.com');";
     $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Mary','Moe','mary@example.com');";
     $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Julie','Dooely','julie@example.com');";

     if(mysqli_multi_query($conn,$sql)){
        echo "New record created succesfully";

     } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
     }

*/
// wypisywanie 1


$sql = "SELECT id, firstname, lastname FROM Myguests";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"] . "- Name: " . 
        $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$nr_rows=mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    echo "id: " . $row["id"] . " - Name: ". $row["firstname"].
    " " . $row["lastname"] . "<br>";
}


// wypisywanie 2
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_row($result)) {
        echo "id: " . $row[0] . " - Name: " . $row[1] . " " . $row[2] . "<br>";
    }
} else {
    echo "0 results";
}

// wypisywanie 2 w tabeli
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<table>";
    while($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
    }
     echo "<table>";
} else {
    echo "0 results";
}

// wypisywanie 2 w liscie
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<ul>";
    while($row = mysqli_fetch_row($result)) {
        echo "<li>" . $row[0] . "" . $row[1] . "" . $row[2] . "</li>";
    }
     echo "</ul>";
} else {
    echo "0 results";
}






mysqli_close($conn);
?>