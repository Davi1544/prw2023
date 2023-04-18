<?php
  $n = readline();
  while($n > 0) {
    $l = readline();
    
    $li = readline();
  
    $en = 0;
    for($i = 0; $i < $l-1; $i++){
      $lnq = readline();
      if($lnq != $li){
        $en = 1;
      }
    }
    
    if($en == 1){
      print("ingles\n");
    }else{
      print($li."\n");
    }
    
    $n--;
  }
?>