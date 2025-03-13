<?php
  function plot($n){
    if (($n %2 )==0){
        return "eshte i plotpjestushem me 2";

    }else{
        return "nuk eshte i plotpjestushem me 2";

    }
  }
  plot(65);
  plot(24);
  echo plot(65);
?>