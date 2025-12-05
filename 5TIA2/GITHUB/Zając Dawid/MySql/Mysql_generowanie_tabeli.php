
<p> Generowanie tabeli  </p>
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
                  $sql="INSERT INTO MyGuests (firstname, lastname, email)
                                          VALUES ('Karol','Bialy','23424242@example.com')";
                                          if(mysqli_query($conn,$sql)) {
                                            echo "New record created successfully";
                                           } else { echo "Error: " .$sql."<br>".mysqli_error($conn);
                                           }
                                           $sql="select id,firstname, lastname  FROM  myguests";
                                           $result =mysqli_query($conn,$sql);
                                           if(mysqli_num_rows($result)>0 ) {
                                            while($row =mysqli_fetch_assoc($result)){
                                              echo "id: ".$row["id"]. " -Name: ".$row["firstname"]." ".$row["lastname"]."<br>";

                                            }
                                           }  else {
                                            echo "0 result ";
                                           }
                                           $sql="SELECT id,firstname , lastname FROM myguests";
                                           $result =mysqli_query($conn,$sql);

                                           if(mysqli_num_rows($result) >0 ){
                                            while($row=mysqli_fetch_row($result)){
                                              echo "id:" .$row[0]. "-Name:".$row[1]."".$row[2]."<br>";

                                            }
                                           } else{
                                            echo "0 result";
                                           }
                                           $sql="Select id, firstname, lastname FROM myguests";
                                           $result =mysqli_query($conn,$sql);

                                           if(mysqli_num_rows($result) >0 ){
                                            echo "<table>";
                                            while($row=mysqli_fetch_row($result)){ 
                                            echo "<tr><td>".$row[0].$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
                                            }
                                           
                                            echo "</table>";   
                                           }  
                                             else{
                                            echo "0 resultat";
                                          }
  ?>