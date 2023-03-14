<?php
	for($i = 1; $i > 0; $i++){
	  
	  $linha1 = readline();
	  
	  $val1 = explode(' ', $linha1);
	  $fi = intval($val1[0]);
	  $la = intval($val1[1]);
	  
	  if($fi == $la){
	    $i = -10;
	  }
	  if($fi > $la){
	    print("Decrescente\n");
	  }
	  if($fi < $la){
	    print("Crescente\n");
	  }
	}
?>