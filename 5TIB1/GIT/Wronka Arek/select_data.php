<?php
// Tytuł slajdu: Select data - generowanie tabeli

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    // output data of each row
    while($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// Prawdopodobnie brakuje zamknięcia połączenia i tagu PHP,
// ale przepisuję tylko to, co jest widoczne na slajdzie.
?>
