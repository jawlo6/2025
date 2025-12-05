<p>Referencja jest to wskazanie na inną zmienną. W PHP referencje są tworzone za pomocą operatora i (ampersand).</p>

<?php
    $foo = 'Bob';
    $bar = &$foo;
    $bar = 'Andy';

    echo $bar;
    echo $foo;
?>