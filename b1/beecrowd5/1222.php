<?php
    while(true){
      
      $sw = array();
      $lines = 0;
      $poem = null;
      $poemf = array();
      $pg = 0;
      
      $linha1 = readline();
  
      $val1 = explode(' ', $linha1);
  
      $n = $val1[0];
      $l = $val1[1];
      $c = $val1[2];
      
      settype($n, "integer");
      settype($l, "integer");
      settype($c, "integer");
      
      $poem = readline();
      
      if($n == null || $l == null || $c == null || $poem == null){
        return;
      }
  
      $val2 = explode(' ', $poem);
      
      $chl = $c;
      $index = 0;
      
      for($i = 0; $i < sizeof($val2); $i++){
        $sw = $val2[$i]." ";
        $pl = strlen($sw);
        
        if($pl == $c){
          $index += 1;
          $chl = 0;
        }
        else if($pl == $chl || $pl == $chl+1){
          $chl = 0;
        }
        else if($pl > $chl){
          $index += 1;
          $chl = $c - $pl;
        }
        else if($pl < $chl){
          $chl -= $pl;
        }
        
        $poemf[$index] .= $sw;
      }
      
      $lines = sizeof($poemf);
      
      $pg=$lines/$l;
      
      settype($pg, 'integer');
      
      if($lines%$l!=0)$pg++;
      
      print("$pg\n");
    }
?>