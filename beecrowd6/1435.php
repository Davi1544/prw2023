<?php
    while(true){
      $n = readline();
      
      if($n == 0 || $n == null) break;
      
      $numbs = array();
      
      for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $n; $j++){
          $distxp = $n - $j;
          $distyp = $n - $i;
          $distxn = $j + 1;
          $distyn = $i + 1;
          
          $coor = array($distxp, $distyp, $distxn, $distyn);
          $numbs[$i][$j] = min($coor);
        }
      }
      for($i = 0; $i < $n; $i++){
          for($j = 0; $j < $n; $j++){
            $v = $numbs[$i][$j];
            
            if($j == 0){
              print("   $v");
            }else{
              print("    $v");
            }
          }
          print("\n");
      }
      print("\n");
    }
?>
