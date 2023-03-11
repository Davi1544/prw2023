<?php
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $a = floatval($val1[0]);
    $b = floatval($val1[1]);
    $c = floatval($val1[2]);
 
    if($a == 0){
        print("Impossivel calcular\n");
        return;
    }
    
    $delta = $b*$b - 4*$a*$c;
    
    if($delta < 0){
        print("Impossivel calcular\n");
        return;
    }
    
    $x1 = ($b*-1 + sqrt($delta))/(2*$a);
    $x2 = ($b*-1 - sqrt($delta))/(2*$a);
    
    $x1 = number_format($x1, 5, ".", "");
    $x2 = number_format($x2, 5, ".", "");
    
    print("R1 = ".$x1."\n");
    print("R2 = ".$x2."\n");
?>