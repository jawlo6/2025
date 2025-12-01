<?php
  $servername="localhost";
  $username="root";
  $password= "";

  $conn=mysqli_connect($servername,$username,$password);


  if (!$conn) {
    die("Connection falied:" . mysqli_connect_error());

  }
  echo "Connected successful";

  $database="Szkola777";
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
  $sql="CREATE TABLE  5TIB2 ( 
       id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(30) not null,
       lastname VARCHAR(50) not null,
       dziennik VARCHAR(50),
       reg_date TIMESTAMP DEFAULT 
               CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";
               if(mysqli_query($conn ,$sql)){
                echo "Table MyGuests created successfully";
               }
                else {
                  echo "Error creating table: ".mysqli_error($conn);
                }
           */
                  $sql="INSERT INTO 5TIB2 (firstname, lastname, dziennik)
                                          VALUES ('Karol','Bialy','2')";
                                          if(mysqli_query($conn,$sql)) {
                                            echo "New record created successfully";
                                           } else { echo "Error: " .$sql."<br>".mysqli_error($conn);
                                           }
                                           $sql="select id,firstname, lastname  FROM  myguests";
                                           $result =mysqli_query($conn,$sql);
                                           if(mysqli_num_rows($result)>0 )  
                                            while($row =mysqli_fetch_assoc($result)){
                                              echo "id: ".$row["id"]. " -Name: ".$row["firstname"]." ".$row["lastname"]."<br>";

                                            }