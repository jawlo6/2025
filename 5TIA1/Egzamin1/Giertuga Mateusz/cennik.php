<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wynajem pokoi</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <header>
            <h1>Pensjonat pod dobrym humorem</h1>
        </header>

        <div class = "lewy">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </div>

        <div class ="srodkowy">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                    $conn = new mysqli("localhost","root","","wynajem");

                    $sql = "SELECT * FROM pokoje";
                    $result = $conn->query($sql);
    
                    while($row = $result -> fetch_array()) {
                        echo "<tr>";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }

                    $conn -> close();
                ?>
            </table>
        </div>

        <div class ="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </div>

        <footer>
            <p>Stronę opracował: Mateusz </p>
        </footer>
    </body>
</html>