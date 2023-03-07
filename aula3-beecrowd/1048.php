<?php
    $sal = readline();
    
    if($sal > 0 && $sal <= 400.00){
        $a = 15;
        $y = 15;
    }
    if($sal >= 400.01 && $sal <= 800.00){
        $a = 12;
        $y = 12;
    }
    if($sal >= 800.01 && $sal <= 1200.00){
        $a = 10;
        $y = 10;
    }
    if($sal >= 1200.01 && $sal <= 2000.00){
        $a = 7;
        $y = 7;
    }
    if($sal >= 2000.01){
        $a = 4;
        $y = 4;
    }
    
    $r = $sal * ($a/100);
    $sal += $r;
    
    $sal = number_format($sal, 2, ".", "");
    $r = number_format($r, 2, ".", "");
    
    print("Novo salario: $sal\n");
    print("Reajuste ganho: $r\n");
    print("Em percentual: $y %\n");
?>