<?php
  while(true){
    $sen = readline();
    $inn = array();
    $inv = 0;
    
    if($sen == null) break;
    
    $length = strlen($sen);
    
    if($length > 32 || $length < 6){
      print("Senha invalida.\n");
      $inv++;
    } 
    else if(!(preg_match('/[A-Z]/', $sen))){
      print("Senha invalida.\n");
      $inv++;
    } 
    else if(!(preg_match('/[a-z]/', $sen))){
      print("Senha invalida.\n");
      $inv++;
    } 
    else if((preg_match('/ /', $sen))){
      print("Senha invalida.\n");
      $inv++;
    } 
    else if(!(preg_match('/[0-9]/', $sen))){
      print("Senha invalida.\n");
      $inv++;
      
    } else{
      
      for($i = 0; $i < $length; $i++){
        $inn = ord($sen[$i]);
      
        if($inn <= 47){
          print("Senha invalida.\n");
          $inv++;
          break;
        } else if($inn > 57 && $inn <= 64){
          print("Senha invalida.\n");
          $inv++;
          break;
        } else if($inn > 90 && $inn < 97){
          print("Senha invalida.\n");
          $inv++;
          break;
        } else if($inn > 122){
          print("Senha invalida.\n");
          $inv++;
          break;
        }
      }
    }
    
    if($inv == 0){
      print("Senha valida.\n");
    }
  }
?>