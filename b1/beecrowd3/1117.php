<?php
    $sum = 0;
    $as = 0;
    for($i = 0; $i < 1; $i--){
        
      $n = readline();
      
      if($n < 0 || $n > 10){
        print("nota invalida\n");
      }else{
        $sum+=$n;
        $as++;
      }
      
      if($as == 2){
        break;
      }
        
    }
    
    $sum /= 2;
    $sum = number_format($sum, 2, ".", "");
    print("media = $sum\n");
?>