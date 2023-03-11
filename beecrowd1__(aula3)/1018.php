<?php
    $valores = array(10000, 5000, 2000, 1000, 500, 200, 100);
	$quant_each  = array(0,0,0,0,0,0,0);
	$c = 1;
	$u = 0;
	$valorfake;
	$valor;
	$valorfake = readline();
	
	$valor = $valorfake * 100;
	
	
    for($i = 0; $i < 7; $i++){
	    $q = 0;
		while($u < $c){
			if($valor < $valores[$i]){
			    break;
			}
	        $valor = $valor - $valores[$i];
			$c++;
			$q++;
		}
        $quant_each[$i] = $q;
    }
    print($valorfake."\n");
	for($p = 0; $p < 7; $p++){
		print($quant_each[$p]." nota(s) de R$ ".$valores[$p]/100 .",00\n");
	}
?>