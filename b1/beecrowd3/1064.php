<?php
  $sum = 0;
  $sumn = 0;
	for($i = 0; $i < 6; $i++){
	  $num = readline();
	  
	  if($num > 0){
	    $sum++;
	    $sumn += $num;
	  }
	}
	
	print($sum." valores positivos\n");
	$me = $sumn/$sum;
	
	$me = number_format($me, 1, ".", "");
	print($me."\n");
?>