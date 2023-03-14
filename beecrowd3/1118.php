<?php
    
    function calc(){
      
       $sum = 0;
       $as = 0;
       for($i = 0; $i < 1; $i--){
          
        $n = readline();
        
        if($n < 0 || $n > 10){
          print("nota invalida\n");
        }else{
          $sum+=$n;
          $as++;
        }
        
        if($as == 2){
          break;
        }
          
       }
      
       $sum /= 2;
       $sum = number_format($sum, 2, ".", "");
       print("media = $sum\n");
    }
    
    calc();
    for($y = 0; $y < 1; $y--){
      
       print("novo calculo (1-sim 2-nao)\n");
       
        $cont = readline();
      	  
      	if($cont == 2){
      	  $y = 1000;
      	}
      	else if($cont == 1){
      	  calc();
      	}
    }
     
?>