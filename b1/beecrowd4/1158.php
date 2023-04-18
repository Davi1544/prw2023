<?php
  $nnum = readline();
    for($i = 0; $i < $nnum; $i++){
      
        $linha1 = readline();
      
        $val1 = explode(' ', $linha1);
    
        $in = intval($val1[0]);
        $nt = intval($val1[1]);
        
        $sum = 0;
        
        while($nt > 0){
          
          if($in % 2 == 1 || $in % 2 == -1){
            $sum += $in;
            $nt--;
          }
          $in++;
        }
        
        print("$sum\n");
    }
?>