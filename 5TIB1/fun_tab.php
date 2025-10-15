Napisz funkcję, która przy użyciu instrukcji while
wypisze elementy tablicy przekazanej jako parametr

<?php
    function wypisz( $tablica ) {
        $i= 0;
        while( $i < count( $tablica ) ) {
            echo $tablica[$i] . "<br>";
            $i++;
        }
    }
    $liczby=[1,2,3,4];
    wpisz( $liczby );
?>

