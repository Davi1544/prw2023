<?php

  $num = readline();
  for($i = 0; $i < $num; $i++){
	  
	  $linha1 = readline();
	  
	  $val1 = explode(' ', $linha1);
	  $fi = intval($val1[0]);
	  $la = intval($val1[1]);
	  
	  if($la == 0){
	    print("divisao impossivel\n");
	  }else {
	    $div = $fi/$la;
	    $div = number_format($div, 1, ".", "");
	    print($div."\n");
	  }
	}
	
?>