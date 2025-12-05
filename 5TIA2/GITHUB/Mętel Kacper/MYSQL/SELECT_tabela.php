<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bazakm";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM myguests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        echo "<table>";
        while ($row = mysqli_fetch_row($result)){
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }