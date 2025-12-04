<?php
echo "This will not expand : \n a newline"."<br>";
$number = 5;
echo "variable value = $number"."<br>";

echo <<<END
       a
      b
     c
\n 
END;

echo <<<END
       a
      b
     c
     END;


?>