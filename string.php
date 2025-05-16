<?php

use Dom\Text;

$age = 40;

$name = "   james   ";
$address = 'Ntinda';

$test = "$age"; //double quotes
$testSq = '$age'; // signle quotes



// print($testSq ."\n");
// print($address . "\n");

//Herodoc and nowdocs

//Herodoc(double quotes) 

$bio = <<<Bio
 Brian is $age
Bio;

//Nowdoc -> single quotes
$Text = <<< 'Text'
    Brian is $age
Text;



// print(strrev($name));


//explode
$greeting = "Hey,how,are,you";
$res = explode(",",$greeting);

print_r($res);


?>