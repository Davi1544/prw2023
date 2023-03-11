<?php
    $linha1 = readline();

    $val1 = explode(' ', $linha1);
    $a = intval($val1[0]);
    $b = intval($val1[1]);
    
    if($a == 1){$soma += 4.00;}
    if($a == 2){$soma += 4.50;}
    if($a == 3){$soma += 5.00;}
    if($a == 4){$soma += 2.00;}
    if($a == 5){$soma += 1.50;}
    
    $soma *= $b;
    
    $soma = number_format($soma, 2, ".","");
    print("Total: R$ $soma\n");
?>