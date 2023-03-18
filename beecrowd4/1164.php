<?php
    $nnum = readline();
    for($i = 0; $i < $nnum; $i++){
        $nttest = readline();
        $j = 1;
        $sum = 0;
        while($j < $nttest){
          if($nttest % $j == 0){
            $sum += $j;
          }
          $j++;
        }
        if($sum == $nttest){
          print("$nttest eh perfeito\n");
        }else{
          print("$nttest nao eh perfeito\n");
        }
    }
?>