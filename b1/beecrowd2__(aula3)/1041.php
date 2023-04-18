<?php
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $x = floatval($val1[0]);
    $y = floatval($val1[1]);
    
    if($x == 0 && $y == 0){
        print("Origem\n");
        return;
    }
    if($x == 0){
        print("Eixo Y\n");
        return;
    }
    if($y == 0){
        print("Eixo X\n");
        return;
    }
    
    if($x > 0 && $y > 0){
        print("Q1\n");
    }
    if($x < 0 && $y > 0){
        print("Q2\n");
    }
    if($x < 0 && $y < 0){
        print("Q3\n");
    }
    if($x > 0 && $y < 0){
        print("Q4\n");
    }
?>