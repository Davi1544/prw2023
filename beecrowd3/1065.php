<?php
  $sum = 0;
  $sumn = 0;
	for($i = 0; $i < 5; $i++){
	  $num = readline();
	  
	  if($num % 2 == 0){
	    $sum++;
	  }
	}
	
	print($sum." valores pares\n");
?>