<?php
    $nnum = readline();
    for($i = 0; $i < $nnum; $i++){
        $nttest = readline();
        $j = 2;
        $npr = 0;
        while($j < $nttest){
          if($nttest % $j == 0){
            $npr = 1;
            break;
          }
          $j++;
        }
        if($npr == 1){
          print("$nttest nao eh primo\n");
        }else{
          print("$nttest eh primo\n");
        }
    }
?>