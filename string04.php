<?php 
$string = "PHP & Framework Course From Ostad";
$search = "Framework";
$replace = "Laravel";

$newString = str_replace($search,$replace,$string);
// echo $newString;


$string2 = "Language and Framework from Ostad";
$search2 = ["Language","Framework"];
$replace2 = ["PHP","Laravel"];
$newString2 = str_replace($search2,$replace2,$string2);
// $newString2 = str_ireplace($search2,$replace2,$string2);
// echo $newString2;

$newString3 = strtr($string2,[
    "Language" => "PHP",
    "Framework" => "Laravel"
]);
echo $newString3;

