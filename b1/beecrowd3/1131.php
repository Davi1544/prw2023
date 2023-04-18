<?php

    $sumI = 0;
    $sumG = 0;
    $sumE = 0;
    $sumGr = 0;
    
    for($i = 1; $i <2; $i--){
	  
	    $linha1 = readline();
	  
  	  $val1 = explode(' ', $linha1);
  	  $in = floatval($val1[0]);
  	  $gr = floatval($val1[1]);
  	  
  	  if($in > $gr){
  	    $sumI += 1;
  	  } else if($gr > $in){
  	    $sumG += 1;
  	  } else if($gr == $in){
  	    $sumE += 1;
  	  }
  	  
  	  print("Novo grenal (1-sim 2-nao)\n");
  	  
  	  $cont = readline();
  	  
  	  if($cont == 2){
  	    break;
  	  }
	  }
	  
	  $sumGr = $sumI + $sumG + $sumE;
	  
	  print($sumGr." grenais\n");
	  print("Inter:".$sumI."\n");
	  print("Gremio:".$sumG."\n");
	  print("Empates:".$sumE."\n");
	  
	  if($sumG > $sumI){
	    print("Gremio venceu mais\n");
	  }
	  if($sumG < $sumI){
	    print("Inter venceu mais\n");
	  }
	  if($sumG == $sumI){
	    print("Nao houve vencedor\n");
	  }
?>