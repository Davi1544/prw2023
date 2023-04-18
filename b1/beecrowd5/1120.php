<?php
	while(true){
	  
    $soma = 0;
    
    $linha1 = readline();
  
    $val1 = explode(' ', $linha1);
  
    $k = $val1[0];
    $n = $val1[1];
    
    $ori = (string)$n;
    
    $size = strlen($n);
    
    if($size <= 0 || $size >= pow (10, 100))break;
    
	  else if($k[1] != null)break;
		
		$us = $k[0];   
		
		if($us == '0')break;
		
		for($i = 0; $i < $size; $i++){	
		  
			if($n[$i] == $us){
			  
				$n[$i] = '0';
				
			}
			if($n[$i] != '0'){
			  
				$soma += 1;
				print($n[$i]);
				
			} else if($soma > 0 && $n[$i] == '0' && $ori[$i] == '0'){
			  
				print($n[$i]);
				
			}
			
		}
		if($soma == 0){
			print("0\n");
		} else {
			print("\n");
		}
	}
?>