<?php

//arrays => loops

//arrays [indexed, associative[key => value], multideminsional]


//indexed arrays
$names = ["Brian","Benjamin","Daniel","Shallon"]; // indexed arrays 

$itemOne = $names[3];

// print($itemOne. "\n");

// print($names[2]. "\n");

//using foreach loop to display items in the index array
foreach($names as $item){
    print($item. "\n");
}

//Associative array

$personalData = ['firstName'=>'Benjamin', 'address'=>'Mbarara', 'age' => 45]; // use keys to access values
//access items
$fname = $personalData['firstName'];
$address = $personalData['address'];
$age = $personalData['age'];

// print($fname.'lives in'. $address. 'and is '. $age. 'years old'. "\n");

// using a foreach loop to access elements in an associative array 
foreach($personalData as $key => $value){
    print($key. '=>'.$value. "\n");
}









?>