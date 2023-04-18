<?php
    $sum = 0;
    $x = 1;
    for($i = 1; $i <= 39; $i++){
      $sum += $i/$x;
      $x *= 2;
      $i++;
    }
    $sum = number_format($sum, 2, ".", "");
    print("$sum\n");
?>