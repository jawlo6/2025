<p>Wyszukiwanie adresu WWW</p>

<?php
  $wzorzec='/((\bhttps?:\/\/) |(\bwww\.))\S*/';
  $tekst="adres: www.zsgsucha.pl";    
  if(preg_match($wzorzec, $tekst ))
    echo "znalesino adres www ";
  else 
    echo "nie znaleziono adresu www ";
  ?>