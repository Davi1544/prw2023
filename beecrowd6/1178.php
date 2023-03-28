<?php
    $x = array();
    $x[0] = readline();
    
    for($n = 1; $n < 100; $n++){
      $x[$n] = $x[$n-1] * 0.5;
    }
    
    for($j = 0; $j < 100; $j++){
      $x[$j] = number_format($x[$j], 4, ".", "");
      print("N[$j] = $x[$j]\n");
    }
?>