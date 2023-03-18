<?php
  	$t = readline();
  	
  	while($t > 0){
  		$an = readline();
  		
  		$len = strlen($an);
  		
  		for($y = $len/2 - 1; $y >= 0; $y--){
  			print($an[$y]);
  		}
  		for($h = $len - 1; $h >= $len/2; $h--){
  			print($an[$h]);
  		}
  		print("\n");
  		$t--;
  	}
?>