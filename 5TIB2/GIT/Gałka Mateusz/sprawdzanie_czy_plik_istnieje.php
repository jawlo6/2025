<?php
$filename = 'C:/xampp/htdocs/bitnami.css';

if(file_exists($filename)){

    echo "The file $filename exists";

}
else {
    echo "the file $filename does not exists";
}

?>