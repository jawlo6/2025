
<p> Tworzenie tabeli MySql </p>
<?php
  $servername="localhost";
  $username="root";
  $password= "";

  $conn=mysqli_connect($servername,$username,$password);


  if (!$conn) {
    die("Connection falied:" . mysqli_connect_error());

  }
  echo "Connected successful";

  $database="goetel90";
  //Create datebase
   /*
  $sql="CREATE DATABASE $database";
  if(mysqli_query($conn,$sql )) {
    echo "Database created successfully";

  }   else {
    echo "Error creating datebase: " .mysql_error($conn);
    

  }   */
  if(mysqli_select_db($conn ,$database)) {
    echo "Database $database selected ";
  } else {
    echo "Error select database: " .mysqli_error($conn);
  }
   /*
  $sql="CREATE TABLE  myGuests ( 
       id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(30) not null,
       lastname VARCHAR(50) not null,
       email VARCHAR(50),
       reg_date TIMESTAMP DEFAULT 
               CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";
               if(mysqli_query($conn ,$sql)){
                echo "Table MyGuests created successfully";
               }
                else {
                  echo "Error creating table: ".mysqli_error($conn);
                }
        */     
  ?>