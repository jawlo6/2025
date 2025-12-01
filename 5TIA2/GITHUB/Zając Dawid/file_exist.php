<?php
  $wzorzec='/byc/';
  $tekst="być albo nie być";
  if(preg_match($wzorzec,$tekst) )
    echo "znaleziono wzorzec";
else
     echo "nie znalesiono wzorca";
    echo "znaleziono:".preg_match_all( $wzorzec, $tekst);
    ?>