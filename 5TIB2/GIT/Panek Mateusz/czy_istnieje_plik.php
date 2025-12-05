<?php

$filename = 'C:/xampp/htdocs/bitnami.css';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
} 
?>