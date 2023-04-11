<?php
  
  $compare = readline();
  
  $numbs = array();
  
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      $numbs[$i][$j] = readline();
    } 
  }
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      if($numbs[$i][$j] >= $compare){
        print("Valor Encontrado: ".$numbs[$i][$j]." Linha: ".$i." Coluna: ".$j."\n");
      }
    } 
  }
?>