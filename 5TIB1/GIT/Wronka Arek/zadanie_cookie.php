<?php
// --- 1. Utworzenie ciasteczka ---
$nr_z_dziennika = 24; 
$czas_waznosci = time() + ($nr_z_dziennika * 24 * 60 * 60); 

setcookie("uczen", "Arek", $czas_waznosci); 

// --- 2. Sprawdzenie, czy ciasteczko istnieje ---
if (isset($_COOKIE["uczen"])) {
    echo "✅ Ciasteczko 'uczen' istnieje. Wartość: " . $_COOKIE["uczen"] . "<br>";
} else {
    echo "❌ Ciasteczko 'uczen' nie istnieje lub jeszcze nie zostało zapisane.<br>";
}

// --- 3. Usunięcie ciasteczka ---
setcookie("uczen", "", time() - 3600); 

// --- 4. Sprawdzenie po usunięciu ---
if (!isset($_COOKIE["uczen"])) {
    echo " Ciasteczko 'uczen' zostało usunięte.";
} else {
    echo " Ciasteczko 'uczen' nadal istnieje.";
}
?>




