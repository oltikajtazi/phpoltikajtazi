
<?php
$dogs=array(array("dog", "mexico", 20), array("husky", "siberi", 15), array("bulldog", "england",10));

 /*echo $dogs[0][0]." origin " .$dogs[0][1]." lifespam ".$dogs[0][2] ."<br>";
 
 echo $dogs[1][0]." origin ". $dogs[1][1]."lifespam".$dogs[1][2]."<br>";

 echo $dogs[2][0]." origin ". $dogs[2][1]."lifespam".$dogs[2][2]."<br>";*/


 for ($row = 0; $row<3; $row++){

    echo "<p>Row number $row </p>";
    echo "<ul>";

    for($col=0 ; $col<3; $col++){
        echo "<li>" .$dogs[$row][$col]."</li>";
    };

    echo "</ul>";
 }

 //nested 1

for($i = 0;$i<3;$i++){
    echo $i . "<br>";
    for($j =0;$j<3; $j++){
        echo $j ."numro mbrenda elementit <br>";
    }
}
?>
