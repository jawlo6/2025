<?php //polaczenie z MySQL i tworzenie bazy danych
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 

    // Tworzenie połączenia
    $conn = mysqli_connect($servername, $username, $password);

    // Sprawdzanie połączenia
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }
    echo "Connected successfully <br>";

    $database = "goetel"; // nazwa bazy danych

    /*
    // Tworzenie bazy danych
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully <br>";
    } else {
        echo "Error creating database: " . mysqli_error($conn . "<br>");
    }
    */
    // Połączenie z konkretną bazą danych
    if (mysqli_select_db($conn, $database)) {
        echo "Connected to database successfully <br>";
    } else {
        echo "Error connecting to database: " . mysqli_error($conn) . "<br>";
    }
    /*
    // Tworzenie tabeli
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully <br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn) . "<br>";
    }
    */

    // Wstawianie danych do tabeli
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Pork', 'john@pork.com');";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    // Pobieranie danych z tabeli           
    $sql = "SELECT id, firstname, lastname FROM MyGuests;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
    while ($row = mysqli_fetch_row($result)){
        echo "<tr>
                <td style='border: 1px solid black;'>" . $row[0] . "</td>
                <td style='border: 1px solid black;'>" . $row[1] . "</td>
                <td style='border: 1px solid black;'>" . $row[2] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results <br>";
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_row($result)){
        echo "<li>" . $row[0] . " " . $row[1] . " " . $row[2] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results <br>";
}
?>