<?php
//functions

// paramterless(no parameter) and paramter(have parameters) functions
//
$name = "Brian";

function hand(){
    $local = 'test';
    echo $local;
}

//function call
hand();


//functions with params
function sum($num1,$num2) // $num1, $num2 => parameters(placeholder)
{
    echo ($num1 + $num2 ."\n");
}



//function call

sum(5,6);  // 5,6 => arguments(value)


function sub($a,$b){
    return ($a-$b);
}

echo sub(8,4);


?>