<?php
    $linha1 = readline();

    $val = explode(' ', $linha1);
    $a = floatval($val[0]);
    $b = floatval($val[1]);
    $c = floatval($val[2]);
    
    $tri = ($a*$c)/2;
    $cir = 3.14159 * ($c * $c);
    $tra = ($a*$c + $b*$c)/2;
    $qua = $b * $b;
    $rec = $a * $b;
    
    print("TRIANGULO: ".number_format($tri, 3, ".", "")."\n");
    print("CIRCULO: ".number_format($cir, 3, ".", "")."\n");
    print("TRAPEZIO: ".number_format($tra, 3, ".", "")."\n");
    print("QUADRADO: ".number_format($qua, 3, ".", "")."\n");
    print("RETANGULO: ".number_format($rec, 3, ".", "")."\n");
?>