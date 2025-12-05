<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bazakm";
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM myguests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_row($result)){
            echo "id: " . $row[0] . " - Name: " . 
            $row[1] . " " . $row[2] . "<br>";
        }
    } else {
        echo "0 results";
    }