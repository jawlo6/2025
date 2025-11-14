<?php
    $conn = new mysqli(hostname: "localhost",username: "root",password: "",database: "podroze");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <section class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </section>
    <section class="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600 zł</td>
            </tr>
            <tr>
                <td>Wenecja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200 zł</td>
            </tr>
        </table>
    </section>
    <section class="srodkowy">
        <h2>W tym roku jedziemy do...</h2>
        <img src="1.jpg">
        <img src="2.jpg">
        <img src="3.jpg">  
        <img src="4.jpg">
        <img src="5.jpg">
        <img src="6.jpg">
        <img src="7.jpg">
        <img src="8.jpg">
        <img src="9.jpg">
    </section>
    <section class="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </section>
    <section class="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
        <li>Dnia 2019-07-14 pojechaliśmy do Francja, Paryz</li>
        <li>Dnia 2019-07-14 pojechaliśmy do Hiszpania, Barcelona</li>
        <li>Dnia 2019-08-14 pojechaliśmy do Hiszpania, Barcelona</li>
        </ol>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Łukasz Wieczorek</p>
</section>
</body>
</html>
<?php
    $conn -> close();
?>