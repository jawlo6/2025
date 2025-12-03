<?php
    $row = 1;
    if(($handle = fopen("test.csv", "r")) !==False){
        while (($data = fgetcsv($handle, 1000, ","))!== FALSE){
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            for ($c=0; $c < $num; $c++) {
                echo $data[$c]  . "<br />\n";
            }
        }
        fclose($handle);
    }
?>



<?php
$xml=simplexml_load_file("note.xml")
    or die("Error:Cannot create object");


print_r($xml);
?>



<?xml version="1.0" encoding="UTF-8"?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>

<?php
$json =
' {"a":1,"b":2,"c":3,"d":4,"e":5}';


var_dump(json_decode($json));
var_dump(json_decode($json, true));
?>



<?php
$arr = array('a'=> 1, 'b'=> 2,
'c'=> 3, ' d' => 4, 'e' =>5);


echo json_encode($arr);
?>
