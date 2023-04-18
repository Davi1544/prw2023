<?php
  $n = readline();
  $x = array();
  
  $linha1 = readline();
  $var1 = explode(' ', $linha1);
  
  for($i = 0; $i < $n; $i++){
    $x[$i] = $var1[$i];
    settype($x[$i], "integer");
  }
  
  $menor = $x[0];
  $pos = 0;
  
  for($p = 0; $p < $n; $p++){
    if($menor > $x[$p]){
      $menor = $x[$p];
      $pos = $p;
    }
  }
  
  print("Menor valor: ".$menor."\n");
  print("Posicao: ".$pos."\n");
?>