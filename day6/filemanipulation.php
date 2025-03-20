<?php

    //Open file named "hh.txt" for writing
    //nese ffle nuk egziston, krijohet nje i ri me te njejten emer
    //nese file ekziston, mbishkruhet kontenti apo te dhenat dhe file parapreak fshihet

  

  // w - e qel file per read and write, nese nuk egziston e krijon nje te ri
  // r - eshte vetem read only mode 
  // a - edhte vetem read only mode edhe pointer shkon ne fund t filit

  // W+ -
  // r+ - file is open ne read and write mode
  // a+ mundesh me shtu text ne fund te filit
  // x - krijohet nje file iri per write only mode

  //fclose($myfile
  

  $myfile = fopen("hh", "w");

 $mytext = "edhte vetem read only mode edhe pointer shkon ne fund t filit";

 fwrite($myfile, $mytext)

 
 $myfile2 = fopen("hh", "w");

 $mytext2 = "edhte vetem read only mode edhe pointer shkon ne fund t filit";
 
 fwrite($myfile2, $mytext2)

 $myfile3 = fopen($myfile3, "a+");
 
 fwrite($myfile3, "\n added more lines to the file")

 




?>