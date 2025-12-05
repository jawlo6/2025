<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
<table>
<?php
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_row($result)) {
    echo "<tr><td>" . $row[0]. "</td><td>" . 
          $row[1]. "</td><td>" . $row[2]. "</td></tr>";
  }
} else {
  echo "0 results";
}
?>
</table>
