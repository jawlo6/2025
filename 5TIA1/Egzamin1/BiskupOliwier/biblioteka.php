<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>
    <main>
        <div class="Div1">
            <h3>Polecamy dzieła autorów</h3>
            <ol>
                <?php
                    $address = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "biblioteka";
                    
                    $conn = mysqli_connect($address,$user,$pass,$database);
                    if(!$conn){
                        die(mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM autorzy";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<li>".$row["imie"]." ".$row["nazwisko"]."</li>";
                        }
                    } else {
                        echo "problem: ".mysqli_error($conn);
                    }
                    mysqli_close($conn);
                ?>
            </ol>
        </div>
        <div class="Div2">
            <h3>ul. Czytelnicza 25&nbsp;Książkowice Wielkie</h3>
            <a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a>
            <br>
            <img src="biblioteka.png" alt="książki">
        </div>
        <div class="Div3">
            <h3>Dodaj czytelnika</h3>
            <form action="biblioteka.php" method="post">
                <label for="imie">Imię</label>
                <input type="text" name="imie" id="imie">
                <br>
                <label for="nazwisko">Nazwisko</label>
                <input type="text" name="nazwisko" id="nazwisko">
                <br>
                <label for="symbol">symbol:</label>
                <input type="number" name="symbol" id="symbol">
                <br>
                <input type="submit" value="DODAJ">
            </form>
        </div>
        <div class="Div4">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $imie = $_POST["imie"];
                    $nazwisko = $_POST["nazwisko"];
                    $kod = $_POST["symbol"];
                    
                    

                    $address = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "biblioteka";
                        
                    $conn = mysqli_connect($address,$user,$pass,$database);
                    if(!$conn){
                        die(mysqli_connect_error());
                    }

                    $sql = "INSERT INTO czytelnicy(imie,nazwisko,kod) VALUES('$imie','$nazwisko','$kod')";
                    if(mysqli_query($conn,$sql)){
                        echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
                    } else {
                        echo "problem: ".mysqli_error($conn);
                    }
                    mysqli_close($conn);
                }
            ?>
        </div>
        <footer>
            <p>Projekt strony: 3</p>
        </footer>
    </main>
</body>
</html>