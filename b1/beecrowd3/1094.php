<?php
    $tote = 0;
	$totais = array(0,0,0);
	
	$m = readline();
	
	for ($i = 0; $i < $m; $i++){
	
		$linha1 = readline();
	  
	  $val1 = explode(' ', $linha1);
	  $num = intval($val1[0]);
	  $c = $val1[1];
	  
	  
	  settype($num, "integer");
	  settype($c, "string");
	  
	  if($c == "C"){
	    $totais[0] += $num;
	  }
	  if($c == "R"){
	    $totais[1] += $num;
	  }
	  if($c == "S"){
	    $totais[2] += $num;
	  }
	  
	  $tote += $num;
	}
	
	print("Total: ".$tote." cobaias\n");
	print("Total de coelhos: ".$totais[0]."\n");
	print("Total de ratos: ".$totais[1]."\n");
	print("Total de sapos: ".$totais[2]."\n");
	
	$porcC = $totais[0]*100/$tote;
	$porcR = $totais[1]*100/$tote;
	$porcS = $totais[2]*100/$tote;
	
	$porcC = number_format($porcC, 2, ".", "");
	$porcR = number_format($porcR, 2, ".", "");
	$porcS = number_format($porcS, 2, ".", "");
	
	print("Percentual de coelhos: ".$porcC." %\n");
	print("Percentual de ratos: ".$porcR." %\n");
	print("Percentual de sapos: ".$porcS." %\n");
?>