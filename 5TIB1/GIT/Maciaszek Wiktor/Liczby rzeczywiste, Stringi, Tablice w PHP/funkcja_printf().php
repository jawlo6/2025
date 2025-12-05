<?php
$tekst = "Hello";
printf("[%s]\n", $tekst);
printf("[%10s]\n", $tekst);     // wyrównanie do prawej
printf("[%-10s]\n", $tekst);    // wyrównanie do lewej
printf("[%.3s]\n", $tekst);     // tylko 3 znaki
printf("[%10.3s]\n", $tekst);   // 3 znaki, szerokość 10
printf("[%-10.3s]\n", $tekst);  // 3 znaki, wyrównanie do lewej
?>
