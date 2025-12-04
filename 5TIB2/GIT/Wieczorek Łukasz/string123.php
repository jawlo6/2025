<?php
//aby wypisac niektore znaki stosujemy tzw. znaki modyfikacji, ucieczki
echo 'Arnold pedzioł kiesik "Jo wrócym"<br>';
echo 'You deleted C:\\Windaws\\System32<br>';
echo "To sie nie uozszerzy: \n nowa linijko \n";
$Number=5;
//zmienne w stringach zapisane w "" są interpretowane
echo "Zmienna = $Number";
echo <<<END
        a
      b
    c
\n
END;
echo <<<END
        a
       b
      c <br>
      END;

//Nowdoc generuje sformatowany tekst bez interpretacji znaków modyfikacji
echo <<<'EOD'
Jakisik tekst fajnuiśki tu se damy kropecke. ukośnicek jakisik /\ i bedzie elegancko.
EOD;

//strlen, mb_strlen zwraca długość stringów
echo "<br>";
echo strlen ("Hello World!"); //12
echo "<br>";
echo strlen ("Grzegżółka"); //13
echo "<br>";
echo mb_strlen ("Grzegżółka"); //10
echo "<br>";
//zamienie słowo na inne podane
echo str_replace ("żyd", "murzyn", "tam jest żyd");
echo "<br>";
//wyszuka na ktorej pozycji zaczyna sie szukany tekst
echo strpos("Witej negrze", 'negrze');
$tekst = "Pochwalony";
echo "<br>";
printf("[%s]\n", $tekst);
printf("[%10s]\n", $tekst);
printf("[%-10s]\n", $tekst);
printf("[%.4s]\n", $tekst);
printf("[%10.3s]\n", $tekst);
printf("[%-10.3s]\n", $tekst);
$n=4395179;
printf("%%d = '%d'\n", $n); //zwykłe
printf("%%f = '%f'\n", $n); //floating
printf("%%e = '%e'\n", $n); //naukowa notifikacja
printf("%%b = '%b'\n", $n); //reprezentacja bitowa
printf("%%o = '%o'\n", $n); //reprezentacja oktalna
printf("%%s = '%s'\n", $n); //reprezentacja stringowa
printf("%%x = '%x'\n", $n); //retrezentacja szesnastkowa
?>