<?php 
$character = "*";

//repeat for 10 times
// for($i=0;$i<10;$i++){
//     echo $character;
// }

// echo str_repeat($character,10);

for($i=10;$i>0;$i--){
    echo str_repeat($character,$i)."\n";
}