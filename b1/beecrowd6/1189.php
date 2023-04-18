<?php
    $m = array();
    
    $o = readline();
    settype($o, "string");
    $summ = 0;
    
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++){
        
        $m[$i][$j] = readline();
    
        if($i == 1){
          if($j < 1) $summ += $m[$i][$j];
        }
        if($i == 2){
          if($j < 2) $summ += $m[$i][$j];
        }
        if($i == 3){
          if($j < 3) $summ += $m[$i][$j];
        }
        if($i == 4){
          if($j < 4) $summ += $m[$i][$j];
        }
        if($i == 5){
          if($j < 5) $summ += $m[$i][$j];
        }
        if($i == 6){
          if($j < 5) $summ += $m[$i][$j];
        }
        if($i == 7){
          if($j < 4) $summ += $m[$i][$j];
        }
        if($i == 8){
          if($j < 3) $summ += $m[$i][$j];
        }
        if($i == 9)if($j < 2) $summ += $m[$i][$j];
        if($i == 10)if($j < 1) $summ += $m[$i][$j];
      } 
    }
    
    if($o == "S"){
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }else if($o == "M"){
      $summ /= 66;
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }
    
?>