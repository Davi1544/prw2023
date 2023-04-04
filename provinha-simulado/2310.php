<?php
  $n = readline();
  $vals = array(0,0,0,0,0,0);
  
  while($n > 0){
    
    $nome = readline();
    
    $linha1 = readline();

    $val1 = explode(' ', $linha1);

    $vals[0] += intval($val1[0]);
    $vals[1] += intval($val1[1]);
    $vals[2] += intval($val1[2]);
    
    $linha2 = readline();

    $val2 = explode(' ', $linha2);

    $vals[3] += intval($val2[0]);
    $vals[4] += intval($val2[1]);
    $vals[5] += intval($val2[2]);
      
    $n--;
  }
  
  $pcts = array();
  
  $pcts[0] = $vals[3]/$vals[0] * 100;
  $pcts[0] = number_format($pcts[0], 2, ".", "");
  $pcts[1] = $vals[4]/$vals[1] * 100;
  $pcts[1] = number_format($pcts[1], 2, ".", "");
  $pcts[2] = $vals[5]/$vals[2] * 100;
  $pcts[2] = number_format($pcts[2], 2, ".", "");
  
  print("Pontos de Saque: $pcts[0] %.\n");
  print("Pontos de Bloqueio: $pcts[1] %.\n");
  print("Pontos de Ataque: $pcts[2] %.\n");
?>