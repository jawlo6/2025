<p>Wyszukiwanie adresu email</p>

<?php
  $wzorzec='/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
  $tekst="email: john@poczta.eu";
  if(preg_match($wzorzec, $tekst ))
    echo "znalesino email ";
  else 
    echo "nie znaleziono email";
  ?>