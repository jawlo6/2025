<?php
$xml=simplexml_load_file("note.xml")
 or die("Error: Cannot find file");
 print_r($xml);
?>