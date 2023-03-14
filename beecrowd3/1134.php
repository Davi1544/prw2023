<?php

  function returnsm() {
    $re = readline();
     
    if($re > 4 || $re < 1){
	    $re = returnsm();
	  }
	 
	  return $re;
  }
  
  $al = 0;
  $gas = 0;
  $die = 0;
  
	for($i = 1; $i > 0; $i++){
	  $op = returnsm();
	  
	  
	  if($op == 1){
	    $al++;
	  }
	  if($op == 2){
	    $gas++;
	  }
	  if($op == 3){
	    $die++;
	  }
	  if($op == 4){
	    $i = -10;
	  }
	}
	
	print("MUITO OBRIGADO\n");
	print("Alcool: ".$al."\n");
	print("Gasolina: ".$gas."\n");
	print("Diesel: ".$die."\n");
?>