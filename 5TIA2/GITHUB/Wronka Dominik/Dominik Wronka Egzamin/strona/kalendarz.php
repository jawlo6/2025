<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">

    <title>Zadania na lipiec</title>
</head>
<body>
    <!-- Baner 1 -->
    <section id="baner-lewy">
        <img src="logo3.png" alt ="lipiec"> <!-- Na lekcji tu pana pytałem, i plik logo1.png nie działał poprawnie najprawopodbniej z powodu pamięci cache przeglądarki. Plik jest
        w folderze, może pan zamienić tu w kodzie na niego, aby sprawdzić czy działa poprawnie, czy rzeczywiście -->
    </section>

    <!-- Baner 2 -->
    <section id = "baner-prawy">
        <h1>TERMINARZ</h1>
        <p>najbliższe zadania:
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "terminarz");
            if (!$polaczenie) {
                die("błąd połączenia z bazą danych");
            }
            $zapytanie1 = "Select wpis FROM zadania WHERE dataZadania>= '2020-07-01' ORDER BY dataZadania ASC LIMIT 3;";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);

            $wyniki= [];
            while ($wiersz = mysqli_fetch_assoc($wynik1)){
                $wyniki[] = $wiersz['wpis'];
            }
            echo implode("; ", $wyniki);
            ?>
        </p>

    </section>

    <!-- glowny -->
    <section id ="main">
    <?php
$zapytanie2 = "SELECT dataZadania, wpis FROM zadania WHERE MONTH(dataZadania) = 7;";
$wynik2 = mysqli_query($polaczenie, $zapytanie2);


while ($wiersz = mysqli_fetch_assoc($wynik2)) {
    echo "<section class='kalendarz'>";
    echo "<h6>{$wiersz['dataZadania']}</h6>"; 
    echo "<p>{$wiersz['wpis']}</p>";         
    echo "</section>";
}
mysqli_close($polaczenie);

?>

    </section>
    <!-- footer -->
    <section id ="footer">
        <a href="sierpien.html">Terminarz na sierpien</a>
        <p> Strone wykonał: 23</p>
    </section>
</body>
</html>