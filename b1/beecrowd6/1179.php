<?php
    $par = array();
    $impar = array();
    
    $imp = 0;
    $p = 0;
    
    for($i = 0; $i < 15; $i++){
      $num = readline();
      
      if($num % 2 != 0){
        $impar[$imp] = $num;
        $imp++;
      } else{
        $par[$p] = $num;
        $p++;
      }
      
      if($imp == 5){
        for($g = 0; $g < $imp; $g++){
          print("impar[$g] = $impar[$g]\n");
        }
        $imp = 0;
      }
      if($p == 5){
        for($g = 0; $g < $p; $g++){
          print("par[$g] = $par[$g]\n");
        }
        $p = 0;
      }
    }
    
    for($g = 0; $g < $imp; $g++){
      print("impar[$g] = $impar[$g]\n");
    }
    for($g = 0; $g < $p; $g++){
      print("par[$g] = $par[$g]\n");
    }
?>