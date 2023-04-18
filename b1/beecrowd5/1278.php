<?php
    $f = true;
    while(true){
      $n = readline();
      
      if($n == 0) break;
      
      if($f){
        $f = false;
      }else{
        print("\n");
      }
      
      $maior = 0;
      $analise = array();
      
      for($i = 0; $i < $n; $i++){
        $line = readline();
        $line = trim($line);
        $line = preg_replace('/\s+/', ' ',$line);
        
        if($maior < strlen($line)){
          $maior = strlen($line);
        }
        
        $analise[$i] = $line;
      }
      
      for($u = 0; $u < sizeof($analise); $u++){
        $inq = $analise[$u];
        $dif = $maior - (strlen($inq));
        if(strlen($inq) < $maior){
          while($dif > 0){
            $inq = " ".$inq;
            $dif--;
          } 
        }
        
        $analise[$u] = $inq;
        $analise[$u] .= "\n";
        print($analise[$u]);
      }
    }
?>