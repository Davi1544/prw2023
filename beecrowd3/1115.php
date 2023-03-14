<?php

  for($i = 1; $i < 2; $i--){
	  
	  $linha1 = readline();
	  
	  $val1 = explode(' ', $linha1);
	  $pri = intval($val1[0]);
	  $sec = intval($val1[1]);
	  
	  if($pri == 0 || $sec == 0){
	    break;
	  } else {
	    if($pri > 0 && $sec > 0){
	      print("primeiro\n");
	    }
	    if($pri > 0 && $sec < 0){
	      print("quarto\n");
	    }
	    if($pri < 0 && $sec < 0){
	      print("terceiro\n");
	    }
	    if($pri < 0 && $sec > 0){
	      print("segundo\n");
	    }
	  }
	}
	
?>