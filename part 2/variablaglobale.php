<?php
$x = 6;

function variablalokale(){
    global $x;
    $y = 10;//local variable
    echo $x
    
    echo $y;
}
variablalokale();
 
?>