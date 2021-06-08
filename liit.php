<?php
$myfile = fopen("liitsis.txt", "r");
$line1 = fgets($myfile);
$line1 = rtrim($line1);
$line2 = fgets($myfile);
$numbers = explode(" ", $line2);
$output = $line1 . ": " . ($numbers[0] + $numbers[1]);
$myfile = fopen("liitval.txt", "w");
fwrite($myfile, $output);
fclose($myfile);

?>
