<?php 
$string = "Hello World";
$anotherString = 'Hello World';

$firstName = "John";
$lastName = "Doe";

// echo "Hello $firstName \n";
// echo "Hello {$firstName}"; //best practice

$fruit = "apple";
// echo "I have 5 $fruit"."s";
// echo "I have 5 {$fruit}s";

// echo "First Name: $firstName \nLast Name: $lastName \nDesignation: Developer";

//heredoc
// $longText = <<<ABCD
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;

//nowdoc
// $longText = <<<'ABCD'
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;
// echo $longText;

$fullName = $firstName ." ".$lastName; //concatenation concatenate
// $fullName = "{$firstName} {$lastName}";
echo $fullName;
