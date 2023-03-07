<?php

    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $a = floatval($val1[0]);
    $b = floatval($val1[1]);
    
    $sum = 0;
    
    do{
        $a++;
        if($a == 24) $a = 0;
        $sum++;
    } while($a != $b);
    
    print("O JOGO DUROU $sum HORA(S)\n");
?>