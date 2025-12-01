<!DOCTYPE html>
<html lang="pl">
<?php $conn = mysqli_connect('localhost','root','','obuwie')?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuwie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Obuwie Męskie</h1>
    </header>
    <div id="glowny">
        <h2>Zamówienie</h2>
        <?php 
            if(isset($_POST['model'])) {
                $model = $_POST['model'];
                $rozmiar = $_POST['rozmiar'];
                $liczba = (int) $_POST['liczba'];

                $sql = 'SELECT buty.nazwa, buty.cena, produkt.kolor, produkt.kod_produktu, produkt.material, produkt.nazwa_pliku FROM buty JOIN produkt ON produkt.model = buty.model WHERE buty.model = "' . $model . '"';

                $result3 = mysqli_query($conn, $sql);
                $row3 = mysqli_fetch_assoc($result3);
                $cena = $liczba * $row3['cena'];
                echo "<img src='" . $row3['nazwa_pliku'] . "' alt='but męski'>";
                echo "<h2>" . $row3['nazwa'] . "</h2><p>cena za " . $liczba . " par: " . $cena . "zł </p>";
                echo "<p>Szczegóły produktu: " . $row3['kolor'] . ", " . $row3['material'] . "</p>";
                echo "<p>Rozmiar: " . $rozmiar . "</p>";
            }
            mysqli_close($conn);
        ?>
        <a href="index.php">Strona główna</a>
    </div>
    <footer>Autor strony: 0000000000</footer>
</body>
</html>