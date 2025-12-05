<?php
$SERVERNAME="LOCALHOST";
USERNAME= "ROOT";
$PASSWORD= "";

$CONN= MYsqli_connect($SERVERNAME, $username, $password);

if(!$conn) {
    die("connection failed:" . MYsqli_connect_error());

}
echo "connected successfully";

// tworzenie bazy danych 
$database="Goetel2";
$sql="create database $database";
if(mysqli_query($conn, $sql)){
    echo "database created";
} else {
    echo "error :" . MYsqli_error($conn);
}

?>