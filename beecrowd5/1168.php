<?php
  	$t = readline();
  	
  	while($t > 0){
  	  $num = readline();
  	  $strnum = (string)$num;
  	  
  	  $sum = 0;
  	  for($i = 0; $i < strlen($strnum); $i++){
  	    $niq = $strnum[$i];
  	    
  	    settype($niq, "integer");
  	    
  	    if($niq == 2 || $niq == 3 || $niq == 5){
  	      $sum += 5;
  	    }
  	    if($niq == 4){
  	      $sum += 4;
  	    }
  	    if($niq == 1){
  	      $sum += 2;
  	    }
  	    if($niq == 7){
  	      $sum += 3;
  	    }
  	    if($niq == 8){
  	      $sum += 7;
  	    }
  	    if($niq == 6 || $niq == 9 || $niq == 0){
  	      $sum += 6;
  	    }
  	  }
  	  print($sum." leds\n");
  		$t--;
  	}
?>