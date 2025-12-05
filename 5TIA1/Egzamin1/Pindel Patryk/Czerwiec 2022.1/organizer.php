<?php
  $drapiezne = [
  [1, "Szczupak", "rzeki i jeziora"],
  [2, "Sandacz", "jeziora"],
  [3, "Sum", "rzeki"]
];
    foreach($drapiezne as $ryba){
   echo "<tr>";
   echo "<td>{$ryba[0]}</td><td>{$ryba[1]}</td><td>{$ryba[2]}</td>";
   echo "</tr>";
    }
?>