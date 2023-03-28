<?php
    $num = readline();
    $x = array();
    $increase = 0;
    for($n = 0; $n < 1000; $n++){
      $x[$n] = $increase;
      $increase++;
      if($increase == $num) $increase = 0;
    }
    for($j = 0; $j < 1000; $j++){
      print("N[$j] = $x[$j]\n");
    }
?>