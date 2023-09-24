<?php 
$string = "PHP & Laravel Course From Ostad";

$parts = explode(" ",$string); //delimiter = seperator
// print_r($parts);
// echo count($parts);

$stringParts = ["PHP","&","Laravel","Course","From","Ostad"]; 
// $newString = implode(" ",$stringParts);
$newString = join(" ",$stringParts);
echo $newString;


