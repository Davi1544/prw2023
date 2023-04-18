<?php
    $linha1 = readline();
    
    $val1 = explode(' ', $linha1);
    
    $lin = intval($val1[0]);
    $tiln = intval($val1[1]);
    
    $sum = 0;
    for($i = 1; $i <= $tiln; $i++){
        $sum++;
        if($sum == $lin){
            $sum = 0;
            print("$i\n");
        }else{
            print("$i ");
        }
    }
?>