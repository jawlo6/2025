<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>

    <table border = 4>
        <tr>
            <?php
            for ($x = 0; $x <= 10; $x++) {
                echo "<td>The number is $x</td>";
            }
            ?>
        </tr>
    </table>

</body>
</html>
