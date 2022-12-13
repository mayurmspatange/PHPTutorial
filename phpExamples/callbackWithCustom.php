<?php 

function addition($num1, $num2){
    return $num1 + $num2;
}


function sub($num1, $num2){
    return $num1 - $num2;
}


function mathmaticOperations($no1 ,$no2, $callback){
    echo("</br>Inputs are".$no1."and".$no2.":"); // perform a your task after that you can call your callback function 
    
    echo($callback($no1,$no2));
}


mathmaticOperations(5,6,"addition");

mathmaticOperations(5,6,"sub");





?>