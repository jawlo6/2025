<?php 
    $nazwa_cookie = "uczen";
    $wartosc_cookie = "Dawid";
    $data_waznosci = time() + (22*24*60*60);
    setcookie($nazwa_cookie, $wartosc_cookie, $data_waznosci);
    echo "Cookie o nazwie: '" . $nazwa_cookie . "' zostało ustawione!<br>";
?>