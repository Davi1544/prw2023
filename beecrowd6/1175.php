<?php
  $N = array();
	$Inv = array();
	
	for ($i = 0; $i < 20; $i++){
		$N[$i] = readline();
	}
	for ($u = 0; $u <= 20; $u++){
		$TrFin = 19 - ($u);
		$Inv[$TrFin] = $N[$u];
	}
	for ($a = 0; $a < 20; $a++){
	    print("N[".$a."] = ".$Inv[$a]."\n");
	}
?>