<?php 
$conn = mysqli_connect("localhost", "root", "", "terminarz");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

    <header>
        <section class="a">
            <img src="logo1.png" alt="lipiec">
        </section>
        
        <section class="b">
            <h1>TERMINARZ</h1>
            <?php
            echo "<p>najbliższe zadania: ";
            $sql = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania <= '2020-07-07' AND wpis <> '';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            echo "$row[0]; ";
            } 
            echo "</p>";
            ?>

        </section>
    </header>
    
    <main>
        <?php
  
$sql2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec';";
$result2 = mysqli_query($conn, $sql2);

        while ($row2 = mysqli_fetch_array($result2)) {
            echo <<< END
                <section class="kalendarz">
                    <h6>$row2[0]</h6>
                    <p>$row2[1]</p>
                </section>
            END;
        }
        ?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 16 numer z dziennika</p>
    </footer>

</body>
</html>


<?php
    $conn->close();
    ?>