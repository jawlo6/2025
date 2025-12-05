Napisz funkcję która wygeneruje tabelę HTML o rozmiarach podanych jako parametry 
<?php
    function stworz_tabele( $wiersze, $kolumny ) {
        echo "<table border='1'>";
        for( $i=0; $i < $wiersze; $i++ ) {
            echo "<tr>";
            for( $j=0; $j < $kolumny; $j++ ) {
                echo "<td>r: " . ( $i + 1 ) . " k: " . ( $j + 1 ) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    stworz_tabele( 4, 5 );