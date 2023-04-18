<?php
  
  $num = readline();
  for($i = 1; $i <= $num; $i++){
	  
	  $linha1 = readline();
	  
	  $val1 = explode(' ', $linha1);
	  $two = floatval($val1[0]);
	  $three = floatval($val1[1]);
	  $five = floatval($val1[2]);
	  
	  $me = $two*2 + $three*3 + $five*5;
	  $me /= 10;
	  
	  $me = number_format($me, 1, ".", "");
	  
	  print("$me\n");
	}
	
?>