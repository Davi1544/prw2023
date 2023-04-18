<?php

  $nnum = readline();
  
  for($i = 0; $i < $nnum; $i++){
      $linha1 = readline();
      
      $val1 = explode(' ', $linha1);
      
      $in = intval($val1[0]);
      $fin = intval($val1[1]);

      $sum = 0;
      
      if($in > $fin){
        $valholder = $in;
        $in = $fin;
        $fin = $valholder;
      }
      $in++;
      while($in < $fin){
        if($in % 2 == 1){
          $sum += $in;
        }
        $in++;
      }
      print($sum."\n");
  }
  
?>