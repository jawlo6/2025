Welcome <?php echo $_POST["name"]; ?><br>
your email adress is: <?php echo $_POST["email"];?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "goetel";
    $conn = mysqli_connect($servername, $username, $password,$database);
    
    if(!$conn) {
        die("connection failed:" .mysqli_connect_error());
    }
    echo "connected sucesfully"
    
    $sql = "insert into MYguests (firstname, email)
    Values ('$name', '$email')";
    echo $sql;
    if (mysqli_query($conn,$sql)){
        echo "new record created sucesfully";
    } else {
        echo "error:" . $sql . "<br>" . mysqli_error($conn);
    }
    ?>