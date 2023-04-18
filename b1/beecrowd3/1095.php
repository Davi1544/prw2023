<?php
	$i = 0;
	for ($J = 60; $J >= 0; $J--){
		$I = 1 + 3*$i;
		$J = 60 - 5*$i;
		$i++;
		print("I=$I J=$J\n");
	}
?>