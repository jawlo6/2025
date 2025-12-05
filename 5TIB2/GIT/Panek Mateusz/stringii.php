<?php

echo 'Arnold once said: "I\’ll be back"<br>';
echo 'You deleted: C:\\*.*? <br>';
echo "This will not expand: \n a newline <br>";

$Number=5;
echo "Variable value = $Number <br>";

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
    <br>
    END;


echo <<<'EOD'
Example of string spanning multiple lines using nowdoc syntax. Backslashes are
always treated literally e.g \\ and \'. <br>
EOD;

echo strlen("Hello world!"); echo "<br>"; //outputs 12
echo strlen("Łódź"); echo "<br>"; // outputs 7
//polskie znaki w unicode zajmują 2 bajty

echo mb_strlen("Łódź"); echo "<br>"; //outputs 4

str_word_count("Hello world!"); echo "<br>";  // outputs 2

echo str_replace ("world","Dolly","Hello world!"); echo "<br>";  //outputs Hello Dolly

echo strpos("Hello world","world"); echo "<br>"; //outputs 6


$tekst = "Hello";
printf("[%s]\n", $tekst); // wypisze [Hello]
printf("[%10s]\n", $tekst); // wypisze [         Hello]
printf("[%-10s]\n", $tekst); // wypisze [Hello          ]
printf("[%.3s]\n", $tekst); // wypisze [Hel]
printf("[%10.3s]\n", $tekst); // wypisze [          Hel]
printf("[%-10.3s]\n", $tekst); // wypisze [Hel         ]
echo "<br>";


$n = "12312312";
printf("%%d = '%d'\n", $n); echo "<br>"; // integer
printf("%%f = '%f'\n", $n); echo "<br>"; // floating
printf("%%e = '%e'\n", $n); echo "<br>";// scientefic notation
printf("%%b = '%b'\n", $n); echo "<br>";// binary
printf("%%o = '%o'\n", $n); echo "<br>";// octal 
printf("%%s = '%s'\n", $n); echo "<br>";// string
printf("%%x = '%x'\n", $n); echo "<br>";// hex

?>