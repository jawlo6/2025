Welcome
<?php echo $_POST["name"]; ?><br>
Your age is: <?php echo $_POST["age"]; ?> <br>

<?php
$servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "goetel";
// Tworzenie połączenia
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Sprawdzanie połączenia
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }
    echo "Connected successfully <br>";

    $name= $_POST["name"];
    $age= $_POST["age"];

    $sql = "INSERT INTO MyGuests (firstname, email)
            VALUES ('$name', '$age(')";;
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }


    



?>
