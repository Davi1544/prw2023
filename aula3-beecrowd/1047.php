<?php

    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $hi = floatval($val1[0]);
    $mi = floatval($val1[1]);
    $hf = floatval($val1[2]);
    $mf = floatval($val1[3]);
    
    $sumH = 0;
    $sumM = 0;
    
    while($mi != $mf){
     $mi++;
     if($mi == 60) $mi = 0;
     $sumM++;
    }
    print("O JOGO DUROU $sumH HORA(S) E $sumM MINUTO(S)\n");
?>