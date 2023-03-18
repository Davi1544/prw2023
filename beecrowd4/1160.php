<?php
    $nnum = readline();
    
    for($i = 0; $i < $nnum; $i++){
      
        $linha1 = readline();
      
        $val = explode(' ', $linha1);
    
        $ppa = intval($val[0]);
        $ppb = intval($val[1]);
        $gra = floatval($val[2]);
        $grb = floatval($val[3]);
        
        $am = 0;
        
        while($ppa <= $ppb){
           $ppa = $ppa + ($ppa*($gra/100));
           $ppb = $ppb + ($ppb*($grb/100));
           
           settype($ppa, "integer");
           settype($ppb, "integer");
           
           $am++;
           
           if($am > 100){
             break;
           }
        }
        
        if($am > 100){
          print("Mais de 1 seculo.\n");
        }else{
          print("$am anos.\n");
        }
        
    }
?>