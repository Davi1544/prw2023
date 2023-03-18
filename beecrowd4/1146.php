<?php
    while(true){
      $hm = readline();
      
      if($hm == 0){
        break;
      }
      
      settype($hm, "integer");
      
      if($hm >= 1){
        
        for($i = 1; $i <= $hm; $i++){
        print("$i");
        
          if($i < $hm){
            print(" ");
          }
        }
        print("\n");
        
      } else if($hm <= -1){
        
        for($i = 1; $i >= $hm; $i--){
        print("$i");
        
          if($i > $hm){
            print(" ");
          }
        }
        print("\n");
      }
    }
?>