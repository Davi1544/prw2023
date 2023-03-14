<?php
	$biggest = 0;
	$position = 0;
	
	for ($i = 0; $i < 100; $i++){
	
		$values[$i] = readline();
		
		if ($values[$i] < 0){return 0;}
		
		if($values[$i] > $biggest){
			$biggest = $values[$i];
			$position = $i+1;
		}
	}
	
	print($biggest."\n");
	print($position."\n");
?>