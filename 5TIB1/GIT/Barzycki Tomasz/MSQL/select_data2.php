<?php
// Tytuł slajdu: Select data - generowanie listy (List generation)


$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<ul>"; // Start of unordered list
    // output data of each row
    while($row = mysqli_fetch_row($result)) {
        // Echoes a list item (<li>) with ID, Firstname, and Lastname
        echo "<li>" . $row[0] . ". " . $row[1] . " " . $row[2] . "</li>";
    }
    echo "</ul>"; // End of unordered list
} else {
    echo "0 results";
}
?>
