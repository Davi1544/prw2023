<?php
  while(true){
    $num = readline();
    $cutoff = readline();
    
    if($num == null || $num == null) break;
    
    settype($num, 'float');
    settype($cutoff, 'float');
    
    $num = $num - $cutoff;
    $rnum = $num;
    
    settype($rnum, "integer");
    
    if($rnum < $num){
      print(($rnum+1)."\n");
    }else{
      print(($rnum)."\n");
    }
  }
?>