1
<?php
$tablica = [2, 3];
array_unshift($tablica, 1);
print_r($tablica);
?>

2
<?php
$tablica = [0, 5, 6, 3];
$tablica[1] = 1;
$tablica[2] = 2;


print_r($tablica);
?>



3
<?php
$tablica = [1,0,2];
array_splice($tablica,1,1);
print_r($tablica);


?>

4
<?php
$string = "Stoi na stacji lokomotywa";
$tablica = explode(" ", $string);
// print_r($tablica);
foreach($tablica as $wartosc){
    echo $wartosc." ";
}




?>










5
<?php
$string="Bolek i Lolek";
echo strpos("Bolek i Lolek", "Olek");
?>

<?php
$string = "Bolek i Lolek";


$szukane = "olek";


if (strpos($string, $szukane) == 1) {
    echo "Słowo '$szukane' występuje w ciągu '$string'.";
} else {
    echo "Słowo '$szukane' nie występuje w ciągu '$string'.";
}
?>


6
<?php
$string = "Żwirek i muchomorek";
echo str_replace("muchomorek", "piasek", $string);
?>




