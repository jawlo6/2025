<p>Wyszukiwanie liczby piecio cyfrowej</p>

<?php
  $wzorzec='/\d{5}/';
  $tekst=" telefon 5675757575";
  if(preg_match ($wzorzec, $tekst ) )
    echo " znaleziono liczbe";
else 
    echo " nie znaleziono liczby ";
?>