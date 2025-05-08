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
function sumKraig($num1,$num2) // $num1, $num2 => parameters(placeholder)
{
    echo ($num1 + $num2 ."\n");
}



//function call

sum(5,6);  // 5,6 => arguments(value)


function sub($a,$b){
    return ($a-$b);
}

//function that does multiplication
function multiply($num1,$num2,$num3){
    return $num1 * $num2 * $num3;
}

echo sub(8,4);



//yesturday we looked at functions any questions??


?>