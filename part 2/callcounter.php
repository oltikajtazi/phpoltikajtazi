<?php
    function callcounter(){ 
 
    static $counter=  0;
    $counter++; 
    echo ("counter value is: $counter <br>");
 }
    callcounter();
    callcounter();
    callcounter();
?>