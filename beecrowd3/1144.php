<?php

  $numb = readline();
	
	$firstvalue = 1;
	$dim = 0;
	$lastvalue = 1;
	
	for($i = 0; $i < $numb; $i++){
		
		$numb2 = $firstvalue*$firstvalue;
		$numb3 = $firstvalue*$numb2;
		$numb4 = ($firstvalue*($numb2+1)) - $dim;
		$numb5 = $numb2 + 1;
		print($firstvalue." ".$numb2." ".$numb3."\n");
		print($firstvalue." ".$numb5." ".$numb4."\n");
		$firstvalue++;
		$dim++;
	}
?>