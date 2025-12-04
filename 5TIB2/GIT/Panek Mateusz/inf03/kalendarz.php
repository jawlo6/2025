<?php 
$conn = new mysqli("localhost", "root", "", "terminarz");
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
            <p>najbliższe zadania: 
                <?php
                $result = $conn->query("SELECT wpis FROM zadania >= NOW()
ORDER BY data_Zadania ASC LIMIT 1;");

while ($row = mysqli_fetch_assoc($result)) {
    echo  $row["wpis"];
} 

            ?>
</p>


        </section>
    </header>
    
    <main>
        <?php
  
$result2 = $conn->query("SELECT dataZadania, wpis FROM zadania;");

        while ($row2 = $result2->fetch_row()) {
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
        <p>Stronę wykonał: 16 numer z dziennika</p>
    
    
    </footer>
    <?php
    $conn->close();
    ?>

</body>
</html>