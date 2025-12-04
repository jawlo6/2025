<?php
    $nazwa_cookie = "uczen";
    setcookie($nazwa_cookie, "", time() - 3600);
    echo "Cookie o nazwie: '" . $nazwa_cookie . "' zostało usunięte!<br>";
?>