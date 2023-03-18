<?php
	while(true){
	  $sentence = readline();
	  $len = strlen($sentence);
	  $switch = 0;
	  
	  if($sentence == null || strlen($sentence) > 50) break;
	  
	  for($i = 0; $i < $len; $i++){
	    if($sentence[$i] != " "){
	      if($switch == 0){
	        $switch++;
	        $sentence[$i] = strtoupper($sentence[$i]);
	      }else{
	        $switch = 0;
	        $sentence[$i] = strtolower($sentence[$i]);
	      }
	    }
	  }
	  
	  print("$sentence\n");
	}
?>