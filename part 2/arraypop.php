<?php
$sports = array("football", "baskeball","voleyball");
array_pop($sports);

array_push($sports,"helllllo");
for($i=0; $i<3; $i++){
    echo $sports[$i];
    echo "<br>";

}

?>