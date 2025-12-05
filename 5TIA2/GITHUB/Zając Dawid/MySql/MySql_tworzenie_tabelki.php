
<p> Tworzenie servera i tabelki w mysql </p>
<?php
  $servername="localhost";
  $username="root";
  $password= "";

  $conn=mysqli_connect($servername,$username,$password);


  if (!$conn) {
    die("Connection falied:" . mysqli_connect_error());

  }
  echo "Connected successful";

  $datebase="goetel52";
  //Create datebase

  $sql="CREATE DATABASE $datebase";
  if(mysqli_query($conn,$sql )) {
    echo "Database created successfully";

  }   else {
    echo "Error creating datebase: " .mysql_error($conn);

  }
  ?>