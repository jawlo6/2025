<table>
    <tr><td>Car</td><td>In stock</td></tr>
    <tr><td>Volvo</td><td>22</td></tr>
    <tr><td>BMW</td><td>15</td></tr>
</table>    
<?php $car=[["Volvo","22"],
            ["BMW","15"] ]   ;
?>

<table>
    <tr><td>Car</td><td>In stock</td></tr>
<?php echo "<tr><td>".$car[0][0]."</td><td>".$car[0][1]."</td></tr>";
       echo "<tr><td>".$car[1][0]."</td><td>".$car[1][1]."</td></tr>" ; ?>
</table>    
