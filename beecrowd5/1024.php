<?php
  $n = readline();
  while($n > 0){
    $sen = readline();
    
    $length = strlen($sen);
    for($i = 0; $i < $length; $i++){
        $inn = ord($sen[$i]);
      
        if($inn >= 65 && $inn <= 90){
          $inn += 3;
        }
        if($inn >= 97 && $inn <= 122){
          $inn += 3;
        }
        
        $sen[$i] = chr($inn);
    }
    
    $sen = strrev($sen);
    
    if($length % 2 == 0){
      $hlen = strlen($sen)/2;
    }else{
      $hlen = (strlen($sen) - 1)/2;
    }
    
    for($i = 0; $i < $length; $i++){
        $inn = ord($sen[$i]);
      
        if($i >= $hlen){
          $inn--;
        }
        
        $sen[$i] = chr($inn);
    }
    
    print($sen."\n");
    $n--;
  }
?>