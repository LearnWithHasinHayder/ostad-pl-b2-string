<?php 

// $condition = 0; //false
// if($condition){
//     echo "Done";
// }

$string = "PHP & Laravel Course From Ostad";
$needle = "PHP";
$position = strpos($string,$needle); 

if($position !== false){ //particularly important for strpos
    echo "Found";
}else{
    echo "Not Found";
}
