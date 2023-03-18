<?php
    $sum = 0;
    $nums = array();
    
    $linha1 = readline();
      
    $val1 = explode(' ', $linha1);

    $A = intval($val1[0]);
    for($z = 1; $z < sizeof($val1); $z++){
      $niq = intval($val1[$z]);
      if($niq > 0){
        $N = $niq;
        break;
      }
    }
    
    for($i = 0; $i < $N; $i++){
        $sum = $sum + $A + $i;
    }
    printf("$sum\n");
?>