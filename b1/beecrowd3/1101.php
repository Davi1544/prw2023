<?php
  
  for($i = 0; $i < 1; $i--){
      $linha1 = readline();
      
      $val1 = explode(' ', $linha1);
      
      $in = intval($val1[0]);
      $fin = intval($val1[1]);

      $sum = 0;
      
      if($in <= 0 || $fin <= 0){
        break;
      }
      
      if($in > $fin){
        $valholder = $in;
        $in = $fin;
        $fin = $valholder;
      }
      while($in <= $fin){
        print("$in ");
        $sum += $in;
        $in++;
      }
      print("Sum=$sum\n");
  }
?>