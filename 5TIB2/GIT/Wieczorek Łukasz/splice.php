<p>Dodanie elementów
<?php
$a1=array(0,1,2,3);
$a2=array(5,6);
array_splice($a1,1,0,$a2)
print_r($a1);
?>
<p>Zamiana elementów</p>
<?php
$b1=array(0,1,2,3);
$b2=array(5,6);
array_splice($b1,0,2,$b2);
print_r($b1);
?>
<p>Usuwanie elementów</p>
<?php
$c1=array(0,1,2,3);
array_splice($c1,0,2);
print_r($c1);
?>
<p>Tworzenie tablicy na podstawie innej</p>
<?php
$d=array("red","blue","black","blacker","white");
print_r(array_slice($d,2));
?>
<?php
$e=array("red","blue","black","blacker","white");
print_r(array_slice($e,1,2));
?>
<?php
$f=array("red","blue","black","blacker","white");
print_r(array_slice($f,-2,1));
?>
<?php
$g=array("red","blue","black","blacker","white");
print_r($g);
echo "<br>";
$potasowana=shuffle($g);
print_r($g);
?>
