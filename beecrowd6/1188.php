<?php
    $m = array();
    
    $o = readline();
    settype($o, "string");
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++) $m[$i][$j] = readline();
    }
    
    $summ = 0;
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++){
        if($i > 6){
          if($i == 7){
            if($j > 4 && $j < 7) $summ += $m[$i][$j];
          }
          if($i == 8){
            if($j > 3 && $j < 8) $summ += $m[$i][$j];
          }
          if($i == 9){
            if($j > 2 && $j < 9) $summ += $m[$i][$j];
          }
          if($i == 10){
            if($j > 1 && $j < 10) $summ += $m[$i][$j];
          }
          if($i == 11){
            if($j > 0 && $j < 11) $summ += $m[$i][$j];
          }
        }
      } 
    }
    
    if($o == "S"){
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }else if($o == "M"){
      $summ /= 30;
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }
    
?>