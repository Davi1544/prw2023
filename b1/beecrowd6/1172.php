<?php
  $x = array();
	for($n = 0; $n < 10; $n++){
	  fscanf(STDIN, "%d", $x[$n]);
	  
	  if($x[$n] <= 1){
	    $x[$n] = 1;
	  }
	}
	
	for($i = 0; $i < 10; $i++) print("X[$i] = $x[$i]\n");
?>
