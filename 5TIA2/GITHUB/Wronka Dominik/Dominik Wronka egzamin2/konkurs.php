<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Wolontariat Szkolny</title>
</head>
<body>
    <header>
      <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>

    <section id="lewy">
        <h3>Konkursowe nagrody</h3>
        <button onClick="window.location.reload()">Losuj nowe nagrody</button>
        <table>
            <tr>
            <th>Nr</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Wartość</th>
            </tr>


                 <?php
                    $serwer = "localhost";
                    $uzytkownik = "root";
                    $haslo = "";
                    $baza = "konkurs";

                    $polaczenie = mysqli_connect($serwer, $uzytkownik, $haslo, $baza);

                    if (!$polaczenie) {
                           die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
                     
                   }

                    $zapytanie = "SELECT nazwa, opis, cena FROM nagrody order by rand() limit 5";
                    $wynik = mysqli_query($polaczenie, $zapytanie);


                   if (mysqli_num_rows($wynik) > 0) {
                   $numer = 1;
                   while ($wiersz = mysqli_fetch_assoc($wynik)) {
                       echo "<tr>";
                       echo "<td>" . $numer . "</td>";
                       echo "<td>" . htmlspecialchars($wiersz['nazwa']) . "</td>";
                       echo "<td>" . htmlspecialchars($wiersz['opis']) . "</td>";
                       echo "<td>" . htmlspecialchars($wiersz['cena']) . "</td>";
                       echo "</tr>";
                       $numer++;
                 }
                 } else {
                     echo "<tr><td colspan='4'>Brak danych w tabeli.</td></tr>";
                 }

                   mysqli_close($polaczenie);
                ?>

        </table>
    </section>
    
    <section id="prawy">
        <img src="puchar.png" alt="Puchar dla wolontariusza">
        <h4>Polecane linki</h4>

        <ul>
            <li><a href="kw1.png">Kwerenda1</a></li>
            <li><a href="kw2.png">Kwerenda2</a></li>
            <li><a href="kw3.png">Kwerenda3</a></li>
            <li><a href="kw4.png">Kwerenda4</a></li>
        </ul>
    
    </section>
    
    <footer>
        <p>Numer zdającego: 23</p>
    </footer>
    
</body>
</html>