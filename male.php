<?php
$myfile = fopen("malesis.txt", "r");
$fileline = fgets($myfile);
$lines = explode("/", $fileline);
foreach ($lines as $value){
    $chars = str_split($value);
    foreach ($chars as $char) {
       // echo $char;
        if (is_numeric($char)) {
            $txt .= str_repeat(".", $char);

        }
        else {
            $txt .= $char;


        }


    }

    $txt .= "\n";
}
$myfile = fopen("maleval.txt", "w");
fwrite($myfile, $txt);






?>
