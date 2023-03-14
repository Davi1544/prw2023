<?php

    $in = readline();
    $lin = readline();
    
    if($in > $lin){
        $place = $in;
        $in = $lin;
        $lin = $place;
    }
  
    for($i = $in+1; $i < $lin; $i++){
        
        if($i % 5 == 2 || $i % 5 == 3){
        print("$i\n");
        }
    }
    
?>