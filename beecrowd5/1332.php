<?php
  $test = readline();
	
	for ($y = 0; $y < $test; $y++){
		$tamanho = 3;
		$erros = 0;
		
		$wordItself = readline();
		
		if($wordItself[0] != 't')$erros++;
		if($wordItself[1] != 'h')$erros++;
		if($wordItself[2] != 'r')$erros++;
		if($wordItself[3] != 'e')$erros++;
		if($wordItself[4] != 'e')$erros++;
		if($erros <= 1)print("3\n");
		
	  $erros = 0;
	    
		if($wordItself[0] != 'o')$erros++;
		if($wordItself[1] != 'n')$erros++;
		if($wordItself[2] != 'e')$erros++;
		if($erros <= 1)print("1\n");
		
		$erros = 0;
		
		if($wordItself[0] != 't')$erros++;
		if($wordItself[1] != 'w')$erros++;
		if($wordItself[2] != 'o')$erros++;
		if($erros <= 1)print("2\n");	
	}
?>