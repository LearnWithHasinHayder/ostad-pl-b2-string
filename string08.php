<?php 
$string = "PHP & Laravel Course From Ostad";
$shuffled = str_shuffle($string);

$encodedString = base64_encode($string);

echo $encodedString;

echo "\n";

$string = "UEhQICYgTGFyYXZlbCBDb3Vyc2UgRnJvbSBPc3RhZA==";
echo base64_decode($string);





