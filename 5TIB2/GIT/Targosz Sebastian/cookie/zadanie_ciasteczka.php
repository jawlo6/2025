<?php
$uczen = "user";
$wartosc = "Sebastian";
$data_waznosci = time() + (21 * 24 * 60 * 60); // 21 days in seconds

setcookie("uczen", $wartosc, $data_waznosci, "/");

echo "Ciasteczko 'uczen' zostało utworzone.";
?>