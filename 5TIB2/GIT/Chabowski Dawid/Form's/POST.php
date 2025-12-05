Welcome, <?php echo $_POST["name"]; ?><br>
Your email adress is: <?php echo $_POST["email"]; ?>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "goetel5";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }
    echo "Connected successfully <br>";

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email');";
    echo $sql . "<br>";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }

    mysqli_close($conn);
?>