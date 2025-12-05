<?php

    session_start();

    echo 'Welcome to my page #2 <br>';

    echo 'Ulubiony kolor to: ' . $_SESSION['favcolor'] . '<br>';
    echo 'Ulubione zwierzę to: ' . $_SESSION['animal'] . '<br>';
    echo date('Y-m-d H:i:s', $_SESSION['time']) . '<br>';

    $_SESSION['data'] = date('d.m.Y'). '<br>';

    echo '<br><a href="sesja1.php">Strona 1</a><br>';

    echo $_SESSION['test'];
?>