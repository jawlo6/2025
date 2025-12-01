<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="ZDOBYWCY GÓR" content="zdobywcy gór">
    <link rel="stylesheet" href="styles.css">
    <title>ZDOBYWCY GÓR</title>
</head>
<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>  

    <nav><a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>    

    <div id="lewy">
        <img src='logo.png' alt="logo zdobywcy">
        <h3>razem z nami:</h3>

        <ul>
            <li>wyjazdy</li>
            <li>szkolenia</li>
            <li>rekreacja</li>
            <li>wypoczynek</li>
            <li>wyzwania</li>
        </ul>
    </div>    


    <div id="prawy">
        <h2>Dołącz do naszegp zespołu!</h2>
        <p>Wpisz swoje dane do formularza: </p>

        <form method="post" action="zdobywcy.php">
            <label>Nazwisko:</label> <input type="text" name="nazwisko">
            <label>Imie:</label> <input type="text" name="imie">
            <label>Funkcja:</label> <select>
                                        <option>uczestnik</option>
                                        <option>przewodnik</option>
                                        <option>zaopatrzeniowiec</option>
                                        <option>organizator</option> 
                                        <option>ratownik</option> 
                                    </select>
            <label>Email: </label> <input type="email" name="email">
            <input type="submit" value="Dodaj" onclick="">
        </form>
        <br>

        <table>
            <td><tr>Nazwisko</tr> <tr>Imie</tr> <tr>Funkcja</tr> <tr>Email</tr> </td>
            <td></td>
        </table>

    </div>    


    <footer>Stronę wykonał: Michał Szarlej</footer>    


</body>
</html>