<?php
    $foo = 'bob';
    $bar = &$foo;
    $bar = 'Anby';
    echo $bar;
    echo $foo;
?>