<?php
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    
    $hi = floatval($val1[0]);
    $mi = floatval($val1[1]);
    $hf = floatval($val1[2]);
    $mf = floatval($val1[3]);
    
    $sumH = 20;
    $sumM = 0;
    
    if($mi == $mf && $hi == $hf){
        $sumM = 0;
        $sumH = 24;
    }else{
        if($hf > $hi){
          if($mf >= $mi){
            $sumH = $hf - $hi;
            $sumM = $mf - $mi;
          }
          if($mf < $mi){
            $sumH = $hf - $hi -1;
            $sumM = 60 - ($mi - $mf);
          }
        }
        else if($hi > $hf){
          if($mf >= $mi){
            $sumH = 24 - ($hi - $hf);
            $sumM = $mf - $mi;
          }
          if($mf < $mi){
            $sumH = 23 - ($hi - $hf);
            $sumM = 60 - ($mi - $mf);
          }
        }else if($hi == $hf){
          if($mf >= $mi){
            $sumH = $hf - $hi;
            $sumM = $mf - $mi;
          }
          if($mf < $mi){
            $sumH = 23;
            $sumM = 60 - ($mi - $mf);
          }
        }
    }
        
    print("O JOGO DUROU $sumH HORA(S) E $sumM MINUTO(S)\n");
?>