<?php

//all content here is php content

//Variables => is a store of value
// datatype => type of value

// = assignment operator

// variable declartion


// instantiation

$firstName = "Brian"; //string

//CASES IN NAMING VARIABLES

//camel case  firstNameTest
//snake case first_name_test
//not   case  FIRSTNAMETEST, FIRSTnameTest

$age = 80; // int

$salary = 100000.500; // float

$address = 'Mbale';  //string

// rules for defining variables


//php defined functions   {print and echo}

//print($address).PHP_EOL;


// OPERATORS

//arithmetic operators (+*/- etc)
// comparisions (> < >= <= etc)
//logical (! !=, etc)

$number1 = 12;
$number2 = 5;

$sum = $number1 + $number2;
//assignment (*,-,/)


//print($sum).PHP_EOL;


//conditionals (if(1), if else(2), if elseif else(3 >)) // switch  // match

/*
if(condition){
body
}
*/

$age = 12;

if($age >= 20){
   // print('You can vote'). PHP_EOL;
}
else{
    //print('Too young to vote'). PHP_EOL;
}



//A program that returns the class level when supplied with CGPA
$cgpa = 4;

if($cgpa >= 4.5  && $cgpa <=5 ){
    print("First Class \n");
}
elseif($cgpa > 3.5 && $cgpa <= 4.4){
    // print("Second Class Upper \n");
}
elseif($cgpa > 3 && $cgpa <=3.4){
    print("Second Class Lower \n");
}
else {
    print("Wrong Cgpa entered! \n");
}


//2. A program that returns the  grade when marks are supplied (85 )

//constants
//key words 
// $pie = 3.14;
// $pie = 2.5;

const PIE = 3.14;


// print(PIE ."\n");


//switch
$carType = "Kawundo";

switch($carType){
    case "Tax":
        print("14 passengers \n");
        break;
    case "Bus":
        print("72 passengers \n");
        break;
    case "Mercedes Benz":
        print("4 passengers \n");
        break;

    default:
        print("Car type not known \n");
        break;
}

//running a php project {terminal , browser(www/html/projectfolder)}
//htdocs, wwww/

$x = 4;
// x is assigned 4
// 4 is assigned to x
//loops

// print('Brian');
// print('Brian');
// print('Brian');
// print('Brian');
// print('Brian');
// print('Brian');
// print('Brian');


//program that outputs numbers from 1 to 100;

$num = 100;
// for(initialize; condition;  decrement/increment){//body}

// for($x=1; $x <= 100; $x++){

//     print($x).PHP_EOL;
// }


// program that outputs the square of a number from 1 to 10;

// for($num = 1; $num <= 10; $num++){
//     $sq = ($num * $num);
//     print($sq).PHP_EOL;
// }


//while(condition){//body}

// true(1) fasle(0)
$count = 1; //initialization

while($count < 11){
    print($count).PHP_EOL;
    $count++;
}

// do while

do{
    print($count).PHP_EOL;
    $count++;

} while($count <= 10);


//foreach loop

//$age = array();

$names = ['bengo', 'Kraig', 'Shallon'];  //0,1..

// print($names[0]).PHP_EOL;
// print($names[1]).PHP_EOL;
// print($names[2]).PHP_EOL;

foreach($names as $name){
    print($name).PHP_EOL;
}


//assignement

//Write more than two live examples using the loops above



?>
