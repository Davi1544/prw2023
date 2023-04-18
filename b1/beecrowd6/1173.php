<?php
    $x = array();
    $x[0] = readline();
    for($n = 1; $n < 10; $n++)$x[$n] = $x[$n-1]*2;
    for($j = 0; $j < 10; $j++)print("N[$j] = $x[$j]\n");
?>