<?php
	for($i = 1; $i > 0; $i++){
	  
	  $num = readline();
	  
	  if($num == 2002){
	    print("Acesso Permitido\n");
	    $i = -10;
	  } else {
	    print("Senha Invalida\n");
	  }
	}
?>