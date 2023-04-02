<?php
  $x = array();
	for($n = 0; $n < 10; $n++){
	  $x[$n] = readline();
	  
	  //print(" $x[$n]");
	  
	  if($x[$n] <= 1 || !isset($x[$n])){
	    $x[$n] = 1;
	  }
	  
	  print("X[$n] = $x[$n]\n");
	}
?>