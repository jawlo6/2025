<p> Wyszukiwanie kodu pocztowego </p>

<?php
  $wzorzec ='/\d{2}-\d{3}/';
  // i - oznacza ignorowanie wielkośći liter 
  $tekst="Poczta 34-200 Sucha-Beskidzka";
  if(preg_match ($wzorzec ,$tekst ,$matches ) )
    echo "znaleziono kod pocztowy  ".$matches[0];
else
    echo " nie znaleziono kod pocztowego ";
?>