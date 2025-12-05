<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>

    <nav>
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li>
                <a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </nav>

    <main>
        <h2>Znajdź kwiaciarnię</h2>

        <form action="znajdz.php" method="post">
            <label for="miasto">Podaj nazwę miasta:</label>
            <input type="text" id="miasto" name="miasto" required>
            <br><br>
            <button type="submit">SPRAWDŹ</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $miasto = htmlspecialchars($_POST["miasto"]);
            
            $conn = new mysqli("localhost", "root", "", "kwiaciarnia");

            if ($conn->connect_error) {
                die("Błąd połączenia: " . $conn->connect_error);
            }

            $sql = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miasto'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<h3>" . $row["nazwa"] . ", " . $row["ulica"] . "</h3>";
                }
            } else {
                echo "<h3>Brak wyników dla miasta: $miasto</h3>";
            }

            $conn->close();
        }
        ?>
    </main>

    <footer>
        <p>Stronę opracował:Tomasz Gibas</p>
        <div style="clear: both;"></div>
    </footer>
</body>
</html>




