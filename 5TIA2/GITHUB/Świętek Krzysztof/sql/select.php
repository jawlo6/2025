<?php
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_row($resoult)) {
        echo "id:" . $row[2]. " - Name: " .
        $row[1]. " " . $row[2]. "<br>";
    }
} else {
    echo "0 results";
}
?>
