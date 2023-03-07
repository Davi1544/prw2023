<?php
    $linha1 = readline();

    $val = explode(' ', $linha1);
    $x1 = floatval($val[0]);
    $y1 = floatval($val[1]);
    
    $linha2 = readline();

    $val2 = explode(' ', $linha2);
    $x2 = floatval($val2[0]);
    $y2 = floatval($val2[1]);
    
    $h1 = ($x2 - $x1) * ($x2 - $x1);
    $h2 = ($y2 - $y1) * ($y2 - $y1);

    $y = $h1 + $h2;

    $dis = sqrt($y);

    print(number_format($dis, 4, ".", "")."\n");
?>