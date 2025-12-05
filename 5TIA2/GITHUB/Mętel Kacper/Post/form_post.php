Welcome <?php echo $_POST["name"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php 
    $conn = mysqli_connect('localhost','root','','nowabaza');

    if(!$conn){
        die ("Connection failed: " . mysqli_connect_error());
    }
    echo "<br> connected successfully <br>" ;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sql = "INSERT INTO MyGuests (name, email) Values
    ('$name','$email')";
    echo $sql . "<br>";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }