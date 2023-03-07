<?php
    
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $a = intval($val1[0]);
    $b = intval($val1[1]);
    $c = intval($val1[2]);
    
    $numbs = array($a, $b, $c);
    $numbs2 = array($a, $b, $c);
    
    sort($numbs);
    
    print("$numbs[0]\n$numbs[1]\n$numbs[2]\n\n");
    
    print("$numbs2[0]\n$numbs2[1]\n$numbs2[2]\n");
?>