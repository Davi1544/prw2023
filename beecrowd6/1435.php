<?php
    while(true){
      $n = readline();
      
      if($n == 0 || $n == null) break;
      
      $num = 0;
      $numbs = array();
      
      while(true){
        for($i = 0; $i < $n; $i++){
          for($j = 0; $j < $n; $j++){
            if($j >= $n-$num && $i >= $n-$num){
              if($j <= $n-($n-$num+1) && $i <= $n-($n-$num+1)){
                if($numbs[$i][$j] <= 0)$numbs[$i][$j] = ($n-$num+1);
              }
            }
          }
        }
        if($n-$num-1 < 0)break;
        
        $num++;
      }
      for($i = 0; $i < $n; $i++){
          for($j = 0; $j < $n; $j++){
            $v =" ".$numbs[$i][$j];
              print("$v");
          }
          print("\n");
      }
      print("\n");
    }
?>