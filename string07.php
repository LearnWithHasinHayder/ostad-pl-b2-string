<?php 
$string = "Hello World";
// $parts = explode(" ",$string);
$parts = str_split($string, 2);
// print_r($parts);

$dummyText = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore obcaecati eum dignissimos error laudantium quis excepturi nemo temporibus ullam natus aliquam incidunt quam quidem necessitatibus illum at eveniet repudiandae corrupti distinctio officiis mollitia ut, doloribus neque? Aperiam assumenda odit, deserunt omnis pariatur, nam, vel perspiciatis ab expedita possimus quam tenetur atque dolor doloremque aspernatur officia et ipsa. Magnam, maxime doloribus. Tenetur aspernatur tempora at et facere ducimus soluta facilis, non sit temporibus explicabo vel quibusdam nisi dolore omnis. Voluptatum asperiores debitis quasi quo sapiente voluptas quaerat ullam tenetur, dolore possimus officia est fuga blanditiis eius maiores sunt molestiae ipsum nihil!";
// $stringParts = str_split($dummyText, 30);
// for($i=0;$i<count($stringParts);$i++){
//     echo $stringParts[$i]."\n";
// }

$stringParts = wordwrap($dummyText, 30, "\n");
echo $stringParts;