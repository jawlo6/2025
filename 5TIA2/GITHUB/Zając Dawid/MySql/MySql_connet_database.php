
<p> Połoczenie z Datebase </p>
<?php
  $servername="localhost";
  $username="root";
  $password= "";

  $conn=mysqli_connect($servername,$username,$password);


  if (!$conn) {
    die("Connection falied:" . mysqli_connect_error());

  }
  echo "Connected successful";

  $database="goetel57";
  //Create datebase

  $sql="CREATE DATABASE $database";
  if(mysqli_query($conn,$sql )) {
    echo "Database created successfully";

  }   else {
    echo "Error creating datebase: " .mysql_error($conn);

  }
  if(mysqli_select_db($conn ,$database)) {
    echo "Database $database selected ";
  } else {
    echo "Error select database: " .mysqli_error($conn);
  }
  ?>