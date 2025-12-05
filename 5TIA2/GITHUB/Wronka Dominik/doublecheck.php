<?php
$filename = 'hello.php';
if (file_exists($filename)) {
    echo "the file $filename exists";
} else {
    echo "the file $filename does not exist";
}
?>

