<?php
$uczen = "uczen";

setcookie($uczen, "", time() - 3600, "/");

echo "Ciasteczko 'uczen' zostało usunięte.";
?> 