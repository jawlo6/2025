<?php
    for( $i=0; $i<10; $i++){
        echo "liczba: $i <br> ";
        if( $i == 5 )
            break;
    }
echo "koniec pętli";
?>
<?php
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo "liczba: $i <br>";
}
echo "koniec pętli";
?>
