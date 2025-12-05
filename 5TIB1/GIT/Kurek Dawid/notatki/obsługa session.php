
<?php
    session_start();
    echo 'Welcome to page #1';


    $_SESSION['favcolor'] = 'red';
    $_SESSION['animal'] = 'dog';
    $_SESSION['time'] = time();


    echo '<br>/><a href="session2.php">Page 2</a>';
?>

<?php
    session_start();
   
    echo 'Welcome to page #2<br>';


    echo 'Uubiony kolor: ' .$_SESSION['favcolor'];
    echo ' Ulubione zwierzę: '.$_SESSION['animal'].'<br>';
    echo date(  'y m d H:s' , $_SESSION['time']) . '<br>';


    echo $_SESSION['bzdura'];
?>
