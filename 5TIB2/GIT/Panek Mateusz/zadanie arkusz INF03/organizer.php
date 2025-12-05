<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="a">
        <h1>ORGANIZER SIERPIEŃ</h1>
        </section>
        <section class="b">
        <form action="organizer.php" method="post">
            <label for="event">Zapisz wydarzenie: </label>
            <input type="text" name="event">
            <button type="submit">OK</button>
            </form>
        </section>
        <section class="c">
            <img src="logo2.png" alt="sierpień">
        </section>
    </header>

    <main>
        <?php

        $conn = new mysqli("localhost", "root", "", "kalendarz");
if (isset($_POST["event"])) {
    $event = $_POST["event"];
    $conn->query("UPDATE zadania SET wpis = \"$event\" WHERE dataZadania = \"2020-08-09\";");
}
$result = $conn->query("SELECT dataZadania, wpis FROM zadania WHERE miesiac = \"sierpien\";");
$conn->close();


        while ($row = $result->fetch_row()) {
            echo <<< END
                <section class="kalendarz">
                    <h5>$row[0]</h5>
                    <p>$row[1]</p>
                </section>
            END;
        }
        ?>
    </main>

    <footer>
        <p>Stronę wykonał: 16 numer z dziennika</p>
    </footer>
</body>
</html>