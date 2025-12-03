<?php
   echo <<<'EOD'
   example of string spanning multiple lines
   using nowdoc syntax. Backslashes are always treated literally,
   e.g. \\ and \ '.
   EOD;
?>
<?php
   echo str_replace("world","Dolly","Hello world!");
   
?>


<?php


   echo strpos("Hello world!","world");
   
?>
