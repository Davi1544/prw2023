<?php

    $in = readline();
    $lin = readline();
    
    if($in > $lin){
      
      $place = $in;
      $in = $lin;
      $lin = $place;
        
    }
  
    $sum = 0;
    for($i = $in; $i <= $lin; $i++){
        
      if($i % 13 != 0){
        $sum += $i;
      }
        
    }
    
    print("$sum\n");
?>