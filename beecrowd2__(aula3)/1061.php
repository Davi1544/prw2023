<?php
    
    $ss = 0; $sm = 0; $sh = 0; $sd = 0;
    
    $ldi = readline();
    $ldi = explode('Dia ', $ldi);
    
    $di = intval($ldi[1]);
    //print("Dia $di\n");
    
    $linha1 = readline();
    
    $val1 = explode(':', $linha1);
    
    $hi = intval($val1[0]);
    $mi = intval($val1[1]);
    $si = intval($val1[2]);
    
    $ldf = readline();
    $ldf = explode('Dia ', $ldf);
    
    $df = intval($ldf[1]);
    //print("Dia $df\n");
    
    $linha2 = readline();
    
    $val2 = explode(':', $linha2);
    
    $hf = intval($val2[0]);
    $mf = intval($val2[1]);
    $sf = intval($val2[2]);
    
    if($sf < $si){
    	$ss+=60;
    	$sm-=1;
    } 
    
    $ss += ($sf - $si);
    
    if($mf < $mi){
    	$sm+=60;
    	$sh-=1;
    }
    
    $sm += ($mf - $mi);
    
    if($hf <= $hi){
    	$sh+=24;
    	$sd-=1;
    } 
    
    $sh += ($hf - $hi);
    $sd += ($df - $di);
    
    if($sh == 24){
      $sh = 0;
      $sd++;
    }
    
    /*if($sh < 0){
      print("$di -> $df\n");
      print("$hi -> $hf\n");
      print("$mi -> $mf\n");
      print("$si -> $sf\n");
    }*/
    
    print("$sd dia(s)\n");
    print("$sh hora(s)\n");
    print("$sm minuto(s)\n");
    print("$ss segundo(s)\n");

?>