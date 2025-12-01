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
        <h1>Obuwie męskie</h1>
    </header>
    <div id="glowny">
        <form method="post" action="zamow.php">
            <label class="kontrolki">Model: </label>
            <select class="kontrolki" name="model">
                <?php
                    $result1 = mysqli_query($conn, "SELECT model from produkt;");
                    if(mysqli_num_rows($result1) > 0)
                    {
                        while($row1 = mysqli_fetch_row($result1))
                        {
                            echo "<option>" . $row1[0] . "</option>";
                        }
                    }
                ?>
            </select>
            <label class="kontrolki">Rozmiar</label>
            <select class="kontrolki" name="rozmiar">
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
            </select>
            <label class="kontrolki">Liczba par: </label>
            <input type="number" class="kontrolki" name="liczba">
            <button type="submit" class="kontrolki">Zamów</button>
        </form>
        <?php
            $result2 = mysqli_query($conn, "SELECT buty.model, nazwa, cena, produkt.nazwa_pliku FROM buty JOIN produkt ON produkt.model = buty.model;");
            if (mysqli_num_rows($result2)>0)
            {
                while($row2 = mysqli_fetch_row($result2))
                {
                    echo "<div class='buty'> <img src='" .  $row2[3] . "' alt='but męski'> <h2>" . $row2[1] . "</h2><h5>Model: " . $row2[0] . "</h5><h4>Cena: " . $row2[2] . "</h4></div>";
                }
            }
        ?>
    </div>
    <footer>Autor strony: 0000000000</footer>
</body>
</html>