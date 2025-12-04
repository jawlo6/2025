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

    $login = $_POST["login"];
    $password = sha1($_POST["password"]);
    $sql = "SELECT login, password FROM MyGuests WHERE login='$login';";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            echo "Zalogowano pomyślnie <br>";
        } else {
            echo "Błędne hasło lub login <br>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    mysqli_close($conn);
?>