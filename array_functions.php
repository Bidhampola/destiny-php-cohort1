<?php

//array functions

 $marks = [1,4]; // 0,1
 $marks2 = [5,7]; // 0,1
 $newArr = [1,4,5,7]; //0,3

 //Number of element in an array
 $count = sizeof($marks);
 $count2 = count($marks);

//  print($count2);

 //array_merge => joins two arrays
 $newMarks = array_merge($marks,$marks2); // indicies

//  print($marks[3]);

//array_sort
$names = ["Brian","Daniel","Shallon","Benjamin",]; // indexed arrays
sort($names); //ascending order
print_r($names);








?>