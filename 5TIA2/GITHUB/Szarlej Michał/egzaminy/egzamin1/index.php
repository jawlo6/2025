<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id= baner>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div> 

    <div id=lewy>
        <h2>Najlepsze ceny</h2>
        <table>
            <?php
            $conn=  mysqli_connect('localhost','root','','sklep');
            $sql="SELECT nazwa,cena FROM towary LIMIT 4;";
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_row($result)) {

           echo" <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                </tr>";
            }
            ?>
        </table>
    </div> 

    <div id=środkowy>
        <h2>Koszt zakuków</h2>
        <form action="index.php" method="post">
            wybierz artykuł
                <select>
                    <option>Zeszyt 60 kartek</option>
                    <option>Zeszyt 32 kartki</option>
                    <option>Cyrkiel</option>
                    <option> Linijka 30 cm</option>
                </select>
        <br>
            liczba sztuk:
                <input type="number" name="ilosc">
        <br>
                <input type="submit" value="OBLICZ">
        </form>
        <?php
        //skrypt n
        ?>
    </div> 

    <div id=prawy>
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p><a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl<a></p>
    </div>   

    <footer>
        <h4>Stronę wykonał: 0624311823</h4>    
    </footer>

    <?php 
        $conn->close()
    ?>
</body>
</html>