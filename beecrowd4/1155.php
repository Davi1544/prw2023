<?php
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
      $sum += 1/$i;
    }
    $sum = number_format($sum, 2, ".", "");
    print("$sum\n");
?>