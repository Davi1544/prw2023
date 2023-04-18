<?php
    $num = readline();
    for($i = 1; $i <= $num; $i++){
	  
	    $n = readline();
	    
  	  if($n == 0){
  	    print("NULL\n");
  	  } else if($n % 2 == 0){
  	    print("EVEN ");
  	  } else {
  	    print("ODD ");
  	  }
  	  
  	  if($n > 0){
  	    print("POSITIVE\n");
  	  } else if($n < 0){
  	    print("NEGATIVE\n");
  	  }
	}
?>