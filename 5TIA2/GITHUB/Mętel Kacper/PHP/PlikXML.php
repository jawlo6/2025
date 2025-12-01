<?php
    $xml = simplexml_load_file("note.xml")
    or die("Error: Cannnot create object");
    print_r($xml); 
?>