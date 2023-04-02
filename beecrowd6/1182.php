<?php
    $m = array();
    
    $l = readline();
    $o = readline();
    settype($o, "string");
    $summ = 0;
    
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++){
        
        $m[$i][$j] = readline();
    
        if($j == $l){
          $summ += $m[$i][$j];
        }
      } 
    }
    
    if($o == "S"){
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }else if($o == "M"){
      $summ /= 12;
      $summ = number_format($summ, 1, ".", "");
      print("$summ\n");
    }
    
?>