<?php
  $n = readline();
  
  while($n > 0){
    
    $linha1 = readline();

    $val1 = explode(' ', $linha1);

    $a = $val1[0];
    $b = $val1[1];
    
    if(strlen($a) < strlen($b))print("nao encaixa\n");
    else if(strlen($a) == strlen($b)){
      
      if($a === $b) print("encaixa\n");
      else{
        print("nao encaixa\n");
      }
    }
    else{
      $s = strlen($a) - 1;
      $t = true;
      for($i = strlen($b)-1; $i >= 0; $i--){
        if($b[$i] != $a[$s]){
          $t = false;
          break;
        }
        $s--;
      }
      
      if($t){
        print("encaixa\n");
      }else{
        print("nao encaixa\n");
      }
    }
    
    $n--;
  }
?>